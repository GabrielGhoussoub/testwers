/*
  The default behaviour is to load wineplatform iframe when page content is loaded.
  Setting window.singlePageApp = true wineplatform iframe will not load automatically.
  To bootstrap it manually use window.wineplatformIframe.init()
  If necessary, iframe can be destroyed using window.wineplatformIframe.destroy()

  REQUIRED VARIABLES:
    - window.wineplatformIframeUrl => wineplatform app url
  OPTIONAL VARIABLES:
    - window.elementIdToAppendIframeTo => the id of the element used to append the iframe to. Default is 'wineplatform-embed'
    - window.wineplatformIframeId => the iframe's id. Default is 'wineplatform-iframe'
*/

(function () {
  // Utility method to extend defaults with user options
  function extendDefaults(source, properties) {
    var property;
    for (property in properties) {
      if (properties.hasOwnProperty(property)) {
        source[property] = properties[property];
      }
    }
    return source;
  }

  function WineplatformIframe() {
    /* CONFIG */
    this.init = init;
    this.destroy = destroy;
    this._initialized = false;
    this.onIframeReady = function () { };
    this.iframe = null;

    // Define option defaults
    var defaults = {
      resetCss: true,
      iframeUrl: '',
      iframeId: '',
      elementIdToAppendIframeTo: ''
    }

    // Create options by extending defaults with the passed in arugments
    if (arguments[0] && typeof arguments[0] === 'object') {
      this.options = extendDefaults(defaults, arguments[0]);
    }



    function loadResetCss() {
      var resetCss = '#' + this.options.iframeId + ' { border: 0; margin: 0 }';
      var styleElement = document.createElement('style');
      styleElement.setAttribute('type', 'text/css');
      styleElement.innerHTML = resetCss;
      document.head.appendChild(styleElement);
    }

    var handleScroll = debounce(function () {
      const iframePositionYRelativeToViewport = -this.iframe.getBoundingClientRect().top
      const message = JSON.stringify({ type: 'hostWindowHasScrolled', value: iframePositionYRelativeToViewport });
      this.iframe.contentWindow.postMessage(message, '*');
    }, 50)

    function receiveMessage(event) {
      if (event && event.data) {
        var data;
        try {
          data = JSON.parse(event.data);
        } catch (e) {
          // Paypal sends postmessages to all parents, ignore them
          // console.error("Not a valid json");
        }
        if (data) {
          switch (data.type) {
            case 'height':
              var iframeHeight = data.value;
              iframeElement = document.getElementById(this.options.iframeId);
              iframeElement.setAttribute('height', iframeHeight);
              // receiveMessage is called each time height changes, call onIframeReady only the first time
              if (!this._initialized) {
                this.onIframeReady();
              }
              this._initialized = true;
              break;
            case 'scrollTo':
              /* Scroll the host page to the y offset where iframe element begins.
                we use getBoundingClientRect to get y distance from browser's view
                we need html element y distance from the view and the iframe distance from the view to compute
              */
              const absoluteIframeOffsetTop = this.iframe.getBoundingClientRect().top - document.getElementsByTagName('html')[0].getBoundingClientRect().top
              window.scrollTo(0, absoluteIframeOffsetTop + data.value);
              break;
            case 'navigateTo':
              /* Navigate to requested url https://visupsrl.atlassian.net/browse/TANDEL-155 */
              window.location.href = data.value;
              break;
          }
        }
      }
    }

    function _dataHasMessage(data) {
      if (data && typeof data === 'object') {
        return true;
      }
      console.error("received a malformed message")
      return false;
    }

    function listenToIframeMessages() {
      // trick to be able to remove listener
      this.handleEvent = function (event) {
        switch (event.type) {
          case 'message':
            receiveMessage.call(this, event);
            break;
          case 'scroll':
            handleScroll.call(this, event);
            break;
        }
      }
      window.addEventListener('message', this, false);
      document.addEventListener('scroll', this, false);
    }

    function loadIframe() {
      var iframeElement = document.createElement('iframe');
      iframeElement.setAttribute('width', '100%');
      iframeElement.setAttribute('height', '100%');
      iframeElement.setAttribute('frameborder', '0');
      iframeElement.setAttribute('scrolling', 'no');
      iframeElement.setAttribute('horizontalscrolling', 'no');
      iframeElement.setAttribute('verticalscrolling', 'no');
      iframeElement.setAttribute('allowtransparency', 'true');
      iframeElement.setAttribute('src', this.options.iframeUrl);
      iframeElement.setAttribute('id', this.options.iframeId);
      listenToIframeMessages.call(this);
      var elementToAppendIframe = document.getElementById(this.options.elementIdToAppendIframeTo);
      if (!elementToAppendIframe) {
        console.error('Element to append iframe to is missing');
        return false;
      }
      elementToAppendIframe.appendChild(iframeElement);
      this.iframe = iframeElement;
    }

    function debounce(func, wait, immediate) {
      var timeout;
      return function () {
        var context = this, args = arguments;
        var later = function () {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    };

    function init() {
      if (this._initialized) {
        console.error('wineplatform iframe already initialized');
      }
      if (this.options.resetCss) {
        loadResetCss.call(this);
      }
      loadIframe.call(this);
    }

    function destroy() {
      if (!this._initialized) {
        console.error('wineplatform iframe not found');
      }
      window.removeEventListener('message', this, false);
      var elementToRemove = document.getElementById(this.options.iframeId);
      elementToRemove.parentNode.removeChild(elementToRemove);
      this._initialized = false;
    }
  }


  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  /* If query param wineplatform_page is specified returns specified page otherwise use
    window.wineplatformIframeUrl https://visupsrl.atlassian.net/browse/TANDEL-153
  */
  function get_iframe_url() {
    const randomPortion = 'random=' + Math.random().toString(36).substring(2, 15);
    const initialPage = getParameterByName('wineplatform_page');
    const splitUrl = window['wineplatformIframeUrl'].split('?');
    let iframeUrl = '';
    if (initialPage) {
      // as per https://visupsrl.atlassian.net/browse/TANDEL-153 ignore products portion of wineplatformIframeUrl
      wineplatformIframeBaseUrlArray = splitUrl[0].split('/products')
      // wineplatformIframeUrl contains a ?
      if (splitUrl.length > 1) {
        iframeUrl = wineplatformIframeBaseUrlArray[0] + '/' + initialPage + '?' + splitUrl[1] + '&' + randomPortion;
      } else {
        iframeUrl = wineplatformIframeBaseUrlArray[0] + '/' + initialPage + '?' + randomPortion;
      }
    } else {
      // wineplatformIframeUrl contains a ?
      if (splitUrl.length > 1) {
        iframeUrl = window['wineplatformIframeUrl'] + '&' + randomPortion
      } else {
        iframeUrl = window['wineplatformIframeUrl'] + '?' + randomPortion
      }
    }
    console.log(iframeUrl)
    return iframeUrl;
  }

  this.wineplatformIframe = new WineplatformIframe({
    iframeUrl: get_iframe_url(),
    iframeId: window['wineplatformIframeId'] || 'wineplatform-iframe',
    elementIdToAppendIframeTo: window['elementIdToAppendIframeTo'] || 'wineplatform-embed'
  });

  if (!window['singlePageApp']) {
    if (document.readyState === 'complete') {
      this.wineplatformIframe.init(this.wineplatformIframe);
    }
    else {
      document.addEventListener('readystatechange', function () {
        if (document.readyState === 'complete') {
          this.init();
        }
      }.bind(this.wineplatformIframe));
    }
  }
})()
