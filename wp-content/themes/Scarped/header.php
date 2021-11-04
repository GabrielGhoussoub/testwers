<head>
  <?php wp_head(); ?>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    
    $(document).ready(function() {
      await loadScript(function(){
        document.getElementsByClassName("header").style.color = 'blue';
      });
      
    });
    
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Studio Idee Materia">
    <meta name="Copyright" content="&copy;2021 Bertani">
    <meta name="format-detection" content="telephone=no">
   
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="alternate" hreflang="en" href="index.html" />
    <link rel="alternate" hreflang="it" href="it/index.html" />
    
    <title>Cantine Bertani | Amarone, Soave and the best wines of Valpolicella</title>
    <meta name="description" content="Bertani: Valpolicella wines, the result of innovation in respect of tradition, love for nature and for the territory. The art of viticulture since 1850" />
    <link rel="canonical" href="index.html" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cantine Bertani | Amarone, Soave and the best wines of Valpolicella" />
    <meta property="og:description" content="Bertani: Valpolicella wines, the result of innovation in respect of tradition, love for nature and for the territory. The art of viticulture since 1850" />
    <meta property="og:url" content="https://www.bertani.net/" />
    <meta property="og:site_name" content="Bertani" />
    <meta property="article:modified_time" content="2021-07-01T09:31:34+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/2.json" />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed1381.json?url=https%3A%2F%2Fwww.bertani.net%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed1ef2?url=https%3A%2F%2Fwww.bertani.net%2F&amp;format=xml" />
    <link rel="icon" href="<?php echo site_url(); ?>/wp-content/uploads/2021/07/favicon.jpg" sizes="32x32" />
    <link rel="icon" href="<?php echo site_url(); ?>/wp-content/uploads/2021/07/favicon.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo site_url(); ?>/wp-content/uploads/2021/07/favicon.jpg" />
    <meta name="msapplication-TileImage" content="https://www.bertani.net/wp-content/uploads/2021/07/favicon.jpg" />
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/" />
    <link rel="preconnect" href="https://ajax.googleapis.com/" />
    <style type="text/css">
        .preloader {
            background-color: #b28f78;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 100000;
            top: 0;
            left: 0
        }
        
        .preloader__img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            opacity: 0;
            z-index: 100
        }
        
        .preloader__countWrap {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 110
        }
        
        .preloader__countInner {
            position: relative;
            left: 50vw;
            top: 50vh;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 680px
        }
        
        .preloader__count {
            overflow: hidden;
            position: relative;
            /* left: 90px; */
            z-index: 100;
            letter-spacing: -8px
        }
        
        .preloader__num {
            -webkit-transform: translateY(100%);
            -ms-transform: translateY(100%);
            transform: translateY(100%);
            display: inline-block
        }
        
        .preloader__bottom {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            left: 0;
            bottom: 8vh;
            letter-spacing: -.4px;
            padding-left: 4vw;
            padding-right: 4vw;
            width: 100vw;
            overflow: hidden
        }
        
        .preloader__arrows,
        .preloader__slide {
            position: relative;
            top: 80px
        }
        
        .preloader__mask {
            background-color: #c2152f;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            -webkit-transform: translateY(100vh);
            -ms-transform: translateY(100vh);
            transform: translateY(100vh);
            z-index: 100010
        }
        
        .preloader.loaded .preloader__arrows,
        .preloader.loaded .preloader__slide {
            position: relative;
            top: 0;
            -webkit-transition: top .85s cubic-bezier(.25, .01, 0, 1.01);
            -o-transition: top .85s cubic-bezier(.25, .01, 0, 1.01);
            transition: top .85s cubic-bezier(.25, .01, 0, 1.01)
        }
        
        .preloader.loaded .preloader__arrows {
            -webkit-transition-delay: .2s;
            -o-transition-delay: .2s;
            transition-delay: .2s
        }
        
        .preloader.disapp {
            z-index: -1;
            opacity: 0;
            -webkit-transition: all .1s;
            -o-transition: all .1s;
            transition: all .1s;
            -webkit-transition-delay: .5s;
            -o-transition-delay: .5s;
            transition-delay: .5s
        }
    </style>
</head>

<body function="onload()" data-rsssl=1 class="home page-template page-template-page_HOME page-template-page_HOME-php page page-id-2 unknown">
  <div id="preloader" class="preloader"> <img class="preloader__img" id="prel_img" src="<?php echo site_url(); ?>/wp-content/uploads/images/svg/preloader.svg" />
    <div class="preloader__countWrap">
      <div class="preloader__countInner">
        <div class="preloader__count red sxl text light schnyder-xl" id="year"></div>
      </div>
    </div>
    <div class="preloader__bottom hidden-xs hidden-sm hidden-lg">
      <div class="preloader__slide white helvetica text xxs"><strong id="prel-txt"></strong></div>
      <div class="preloader__arrows"> <img src="<?php echo site_url(); ?>/wp-content/uploads/images/svg/preloader-icons.svg" /></div>
    </div>
  </div>
  <div class="preloader__mask" id="prel_mask"></div>
  <div id="change"></div>
  <main id="main">
    <header class="header" style="height: 700px;">
      <div class="header__hamburger ham magic-scale"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28.3" height="28.3" overflow="visible" viewbox="0 0 28.3 28.3" style="enable-background:new 0 0 28.3 28.3;" xml:space="preserve">
          <g>
            <rect x="1.9" y="1.9" width="24.6" height="3.2" />
            <rect class="ham__mid" x="1.9" y="12.6" width="24.6" height="3.2" />
            <rect x="1.9" y="23.2" width="24.6" height="3.2" />
          </g>
        </svg></div>
      <a  href="<?php echo site_url(); ?>" title="Bertani"><svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 24.1 140.8" overflow="visible" xml:space="preserve" width="24.1" height="140.8">
          <g>
            <polygon points="0.6,128.4 0,128.4 0,134.4 24.1,134.4 24.1,133.9 0.6,133.9 	" /> <!-- <path d="M21.3,135.7c-0.7,0-1.3,0.2-1.8,0.7c-0.5,0.5-0.7,1.1-0.7,1.8c0,0.7,0.2,1.3,0.7,1.8c0.5,0.5,1.1,0.7,1.8,0.7c0.7,0,1.3-0.2,1.8-0.7c0.5-0.5,0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.7-1.8C22.6,135.9,22,135.7,21.3,135.7z M22.8,139.8c-0.4,0.4-0.9,0.6-1.5,0.6c-0.6,0-1.1-0.2-1.5-0.6c-0.4-0.4-0.6-0.9-0.6-1.6c0-0.6,0.2-1.1,0.6-1.6c0.4-0.4,0.9-0.6,1.5-0.6c0.6,0,1.1,0.2,1.5,0.6c0.4,0.4,0.6,0.9,0.6,1.6C23.5,138.8,23.3,139.4,22.8,139.8z"/> <path d="M20,137.7H21v0.4c0,0.3,0,0.4-0.1,0.5c-0.1,0.2-0.3,0.3-0.6,0.3h-0.2l-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0v0.5l0,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0h0.2c0.1,0,0.3,0,0.4-0.2c0.1-0.1,0.2-0.3,0.3-0.5c0,0.2,0.1,0.3,0.1,0.4c0.1,0.2,0.3,0.3,0.5,0.3c0.3,0,0.6-0.1,0.7-0.4c0.1-0.2,0.1-0.4,0.1-0.8v-1H20V137.7z M21.4,137.7h1v0.4c0,0.3,0,0.5-0.1,0.6c-0.1,0.1-0.2,0.2-0.4,0.2c-0.2,0-0.4-0.1-0.4-0.3c0-0.1-0.1-0.3-0.1-0.5V137.7z"/> -->
            <rect x="1.2" y="128.5" width="22.8" height="4.7" />
            <polygon points="0.6,118.2 0,118.6 0,124.4 24.1,124.4 24.1,123.8 0.6,123.8 	" />
            <polygon points="4.7,95.2 5.2,95.1 5.2,87.7 0.6,86.1 0.6,80.5 0,80.3 0,86.7 4.7,88.2 	" />
            <path d="M1.2,97v5.2l22.8-8v-5.4L1.2,80.7v5l4.7,1.5v8.4L1.2,97z M9.8,88.5l9,3l-9,2.9V88.5z" />
            <polygon points="10.5,89.4 10.5,90.1 15.5,91.8 16.6,91.4 	" />
            <polygon points="0.6,96.9 0,97.1 0,103.7 24.1,95.2 24.1,94.8 0.6,103.1 	" />
            <polygon points="19.3,75.9 0.6,75.9 0.6,70.3 0,70.3 0,76.4 18.8,76.4 18.8,83.2 24.1,83.2 24.1,82.7 19.3,82.7 	" />
            <polygon points="19.3,39.1 19.3,27 15.8,27 15.8,27.6 18.8,27.6 18.8,39.6 24.1,39.6 24.1,39.1 	" />
            <path d="M1.8,62.2C1.9,62.1,2,62.1,2,62H0.6v-6c0,0,0,0-0.1,0L0,56.1v6.4h1.6L1.8,62.2z" />
            <polygon points="11.1,118 24.1,110.6 24.1,110.4 10.7,118 	" />
            <polygon points="1.2,118.4 1.2,123.1 24,123.1 24,118.7 8.1,118.7 24,109.7 24,104.7 1.2,104.7 1.2,109.1 17.4,109.1 	" />
            <polygon points="0,104.6 0,110.3 13.9,110.3 14.9,109.8 0.6,109.8 0.6,104.6 	" />
            <path d="M17.6,19.3c1.5,0,2.8-0.4,3.9-1.2c0.3-0.3,0.6-0.5,0.9-0.9c-0.1,0.1-0.2,0.2-0.4,0.3l0,0c-1.1,0.8-2.4,1.2-3.9,1.2c-1.5,0-2.8-0.4-3.8-1.2c-0.3-0.2-0.5-0.5-0.8-0.9c-0.1,0.2-0.3,0.4-0.5,0.6c0.2,0.3,0.5,0.6,0.7,0.8C14.7,18.9,16,19.3,17.6,19.3z" />
            <path d="M8.9,52.6c0,1-0.1,1.5-0.3,1.9c0.2-0.1,0.3-0.2,0.3-0.2c0.2-0.2,0.5-0.8,0.5-2.2v-4H0.6v-5.4H0v6h8.9V52.6z" />
            <polygon points="24,82 24,63.6 20,63.6 20,70.4 1.2,70.4 1.2,75.2 20,75.2 20,82 	" />
            <path d="M21.7,60.4c0.3-0.2,0.5-0.4,0.7-0.7c-0.1,0-0.1,0.1-0.1,0.1c-0.6,0.5-1.3,0.9-2.1,1.2c-0.8,0.3-1.7,0.5-2.6,0.5c-1.2,0-2.4-0.3-3.5-0.9c-0.8-0.4-1.5-1-1.9-1.8c-0.2,0.2-0.3,0.4-0.5,0.6c0.5,0.8,1.1,1.4,1.9,1.8c1.1,0.6,2.3,0.9,3.5,0.9c1,0,1.9-0.2,2.6-0.5C20.4,61.4,21.1,61,21.7,60.4z" />
            <path d="M10,10.8c0,0.9-0.1,1.6-0.3,2c0,0.1-0.1,0.2-0.2,0.3c0.3-0.2,0.5-0.4,0.7-0.8c0.2-0.4,0.3-1.1,0.3-2V5.3H5.9v0.6H10V10.8z" />
            <rect x="18.8" y="63.5" width="0.6" height="6.3" />
            <path d="M2.7,16.1c0.5,0.6,1.1,1.2,1.8,1.6c1.1,0.7,2.3,1,3.6,1c1.3,0,2.4-0.3,3.3-0.9c0.9-0.6,1.6-1.5,2-2.6c0.4,0.8,0.8,1.3,1.3,1.7c0.8,0.7,2,1.1,3.4,1.1c1.4,0,2.5-0.3,3.5-1c1.6-1.2,2.4-3.1,2.4-5.9v-11H1.2v10.2c0,1.2,0.1,2.2,0.3,3.2C1.7,14.6,2.1,15.4,2.7,16.1z M15,4.7h5v4.9c0,1.1-0.1,2-0.4,2.7c-0.3,0.8-1,1.2-2.1,1.2c-1,0-1.6-0.3-2-0.9C15.2,12,15,11.2,15,10.2V4.7z M5.2,4.7h6.1v5.6c0,1-0.1,1.7-0.4,2.3c-0.4,1-1.3,1.4-2.4,1.4c-1.4,0-2.3-0.5-2.8-1.5c-0.3-0.5-0.4-1.3-0.4-2.3V4.7z" />
            <polygon points="24,38.4 24,21.7 1.2,21.7 1.2,39 5.3,39 5.3,26.4 11.2,26.4 11.2,37.4 15.1,37.4 15.1,26.4 20,26.4 20,38.4 	" />
            <path d="M6.2,61.5c1.7,0,3-0.2,3.9-0.7c0.4-0.2,0.8-0.6,1.1-1c-0.2,0.2-0.4,0.3-0.6,0.4C9.7,60.7,8.5,61,6.7,61H5.2c-1.2,0-1.8,0.1-2,0.1c-0.4,0.1-0.7,0.3-0.9,0.6l-0.1,0.1c0.1-0.1,0.2-0.1,0.4-0.2c0.2,0,0.7-0.1,2-0.1H6.2z" />
            <path d="M18.8,10.2c0,1-0.1,1.8-0.3,2.5c0,0,0,0,0,0.1c0.3-0.2,0.5-0.4,0.6-0.6c0.2-0.6,0.3-1.4,0.3-2.4V5.3h-3.7v0.6h3.1V10.2z" />
            <path d="M1.6,17.1c0.5,0.7,1.2,1.3,2,1.8c1.2,0.7,2.5,1.1,4,1.1c1.4,0,2.7-0.3,3.7-1c0.4-0.3,0.8-0.7,1.2-1.1c-0.2,0.2-0.4,0.4-0.6,0.5c-1,0.7-2.3,1-3.7,1c-1.5,0-2.8-0.4-4-1.1c-0.8-0.5-1.4-1.1-2-1.8c-0.6-0.8-1-1.8-1.3-2.8c-0.2-1-0.3-2.2-0.3-3.4V0H0v10.9c0,1.2,0.1,2.3,0.3,3.4C0.6,15.4,1,16.3,1.6,17.1z" />
            <polygon points="5.4,39.6 0.6,39.6 0.6,21.6 0,21.6 0,40.2 5.4,40.2 	" />
            <path d="M24,42.8H1.2v4.6h8.9v4.6c0,1.3-0.2,2.2-0.7,2.7C9,55.3,8,55.5,6.5,55.5l-2.1,0c-0.7,0-1.3,0.1-2,0.2c-0.3,0.1-0.7,0.2-1.2,0.3v5.2h0.6c0.3-0.5,0.7-0.8,1.3-0.9c0.4-0.1,1.1-0.1,2.1-0.1h1.5c1.6,0,2.8-0.2,3.6-0.7c0.8-0.4,1.4-1.2,1.8-2.2c0.4,1.3,1.2,2.2,2.2,2.7c1,0.5,2.1,0.8,3.2,0.8c0.9,0,1.7-0.1,2.4-0.4c0.7-0.3,1.3-0.7,1.9-1.1c0.7-0.6,1.2-1.3,1.6-2.1c0.4-0.8,0.6-2,0.6-3.6V42.8z M20.1,52.7c0,1-0.1,1.7-0.4,2.2c-0.5,0.9-1.4,1.3-2.8,1.3c-1.3,0-2.1-0.4-2.6-1.3c-0.2-0.5-0.4-1.3-0.4-2.3v-5.1h6.1V52.7z" />
            <polygon points="10.5,27 6,27 6,27.6 10,27.6 10,38.7 15.3,38.7 15.3,38.1 10.5,38.1 	" />
            <path d="M18.8,53.2c0,1.1-0.2,1.6-0.3,1.9v0c0,0,0,0,0,0c0.2-0.1,0.4-0.3,0.6-0.6c0.1-0.3,0.3-0.8,0.3-1.9v-4.6h-4.8v0.6h4.2V53.2z 		" />
          </g>
        </svg> </a>
      <a class="header__logo hidden-sm hidden-md hidden-lg" href="<?php echo site_url(); ?>" title="Bertani"><svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 140.7 24.1" overflow="visible" xml:space="preserve" width="140.7" height="24.1">
          <g>
            <polygon points="128.4,23.5 128.4,24.1 134.4,24.1 134.4,0 133.9,0 133.9,23.5 	" /> <!-- <path d="M135.7,2.8c0,0.7,0.2,1.3,0.7,1.8s1.1,0.7,1.8,0.7s1.3-0.2,1.8-0.7s0.7-1.1,0.7-1.8c0-0.7-0.2-1.3-0.7-1.8 		s-1.1-0.7-1.8-0.7s-1.3,0.2-1.8,0.7C135.9,1.5,135.7,2.1,135.7,2.8z M139.8,1.3c0.4,0.4,0.6,0.9,0.6,1.5s-0.2,1.1-0.6,1.5 		c-0.4,0.4-0.9,0.6-1.6,0.6c-0.6,0-1.1-0.2-1.6-0.6c-0.4-0.4-0.6-0.9-0.6-1.5s0.2-1.1,0.6-1.5c0.4-0.4,0.9-0.6,1.6-0.6 		C138.8,0.6,139.4,0.8,139.8,1.3z"/> <path d="M137.7,4.1v-1h0.4c0.3,0,0.4,0,0.5,0.1c0.2,0.1,0.3,0.3,0.3,0.6V4v0.1l0,0l0,0h0.5l0,0V4c0-0.1,0-0.1,0-0.2V3.6 		c0-0.1,0-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.3c0.2,0,0.3-0.1,0.4-0.1c0.2-0.1,0.3-0.3,0.3-0.5c0-0.3-0.1-0.6-0.4-0.7 		c-0.2-0.1-0.4-0.1-0.8-0.1h-1v2.6H137.7z M137.7,2.7v-1h0.4c0.3,0,0.5,0,0.6,0.1s0.2,0.2,0.2,0.4c0,0.2-0.1,0.4-0.3,0.4 		c-0.1,0-0.3,0.1-0.5,0.1H137.7z"/> -->
            <rect x="128.5" y="0.1" width="4.7" height="22.8" />
            <polygon points="118.2,23.5 118.6,24.1 124.4,24.1 124.4,0 123.8,0 123.8,23.5 	" />
            <polygon points="95.2,19.4 95.1,18.9 87.7,18.9 86.1,23.5 80.5,23.5 80.3,24.1 86.7,24.1 88.2,19.4 	" />
            <path d="M97,22.9h5.2l-8-22.8h-5.4l-8.1,22.8h5l1.5-4.7h8.4L97,22.9z M88.5,14.3l3-9l2.9,9C94.4,14.3,88.5,14.3,88.5,14.3z" />
            <polygon points="89.4,13.6 90.1,13.6 91.8,8.6 91.4,7.5 	" />
            <polygon points="96.9,23.5 97.1,24.1 103.7,24.1 95.2,0 94.8,0 103.1,23.5 	" />
            <polygon points="75.9,4.8 75.9,23.5 70.3,23.5 70.3,24.1 76.4,24.1 76.4,5.3 83.2,5.3 83.2,0 82.7,0 82.7,4.8 	" />
            <polygon points="39.1,4.8 27,4.8 27,8.3 27.6,8.3 27.6,5.3 39.6,5.3 39.6,0 39.1,0 	" />
            <path d="M62.2,22.3c-0.1-0.1-0.1-0.2-0.2-0.2v1.4h-6c0,0,0,0,0,0.1l0.1,0.5h6.4v-1.6L62.2,22.3z" />
            <polygon points="118,13 110.6,0 110.4,0 118,13.4 	" />
            <polygon points="118.4,22.9 123.1,22.9 123.1,0.1 118.7,0.1 118.7,16 109.7,0.1 104.7,0.1 104.7,22.9 109.1,22.9 109.1,6.7 	" />
            <polygon points="104.6,24.1 110.3,24.1 110.3,10.2 109.8,9.2 109.8,23.5 104.6,23.5 	" />
            <path d="M19.3,6.5c0-1.5-0.4-2.8-1.2-3.9c-0.3-0.3-0.5-0.6-0.9-0.9c0.1,0.1,0.2,0.2,0.3,0.4l0,0c0.8,1.1,1.2,2.4,1.2,3.9 		s-0.4,2.8-1.2,3.8c-0.2,0.3-0.5,0.5-0.9,0.8c0.2,0.1,0.4,0.3,0.6,0.5c0.3-0.2,0.6-0.5,0.8-0.7C18.9,9.4,19.3,8.1,19.3,6.5z" />
            <path d="M52.6,15.2c1,0,1.5,0.1,1.9,0.3c-0.1-0.2-0.2-0.3-0.2-0.3c-0.2-0.2-0.8-0.5-2.2-0.5h-4v8.8h-5.4v0.6h6v-8.9H52.6z" />
            <polygon points="82,0.1 63.6,0.1 63.6,4.1 70.4,4.1 70.4,22.9 75.2,22.9 75.2,4.1 82,4.1 	" />
            <path d="M60.4,2.4c-0.2-0.3-0.4-0.5-0.7-0.7c0,0.1,0.1,0.1,0.1,0.1c0.5,0.6,0.9,1.3,1.2,2.1c0.3,0.8,0.5,1.7,0.5,2.6 		c0,1.2-0.3,2.4-0.9,3.5c-0.4,0.8-1,1.5-1.8,1.9c0.2,0.2,0.4,0.3,0.6,0.5c0.8-0.5,1.4-1.1,1.8-1.9c0.6-1.1,0.9-2.3,0.9-3.5 		c0-1-0.2-1.9-0.5-2.6C61.4,3.7,61,3,60.4,2.4z" />
            <path d="M10.8,14.1c0.9,0,1.6,0.1,2,0.3c0.1,0,0.2,0.1,0.3,0.2c-0.2-0.3-0.4-0.5-0.8-0.7c-0.4-0.2-1.1-0.3-2-0.3h-5v4.6h0.6v-4.1 		H10.8z" />
            <rect x="63.5" y="4.7" width="6.3" height="0.6" />
            <path d="M16.1,21.4c0.6-0.5,1.2-1.1,1.6-1.8c0.7-1.1,1-2.3,1-3.6s-0.3-2.4-0.9-3.3c-0.6-0.9-1.5-1.6-2.6-2c0.8-0.4,1.3-0.8,1.7-1.3 		C17.6,8.6,18,7.4,18,6s-0.3-2.5-1-3.5c-1.2-1.6-3.1-2.4-5.9-2.4h-11v22.8h10.2c1.2,0,2.2-0.1,3.2-0.3C14.6,22.4,15.4,22,16.1,21.4z 		 M4.7,9.1v-5h4.9c1.1,0,2,0.1,2.7,0.4c0.8,0.3,1.2,1,1.2,2.1c0,1-0.3,1.6-0.9,2c-0.6,0.3-1.4,0.5-2.4,0.5H4.7z M4.7,18.9v-6.1h5.6 		c1,0,1.7,0.1,2.3,0.4c1,0.4,1.4,1.3,1.4,2.4c0,1.4-0.5,2.3-1.5,2.8c-0.5,0.3-1.3,0.4-2.3,0.4H4.7V18.9z" />
            <polygon points="38.4,0.1 21.7,0.1 21.7,22.9 39,22.9 39,18.8 26.4,18.8 26.4,12.9 37.4,12.9 37.4,9 26.4,9 26.4,4.1 38.4,4.1 	" />
            <path d="M61.5,17.9c0-1.7-0.2-3-0.7-3.9c-0.2-0.4-0.6-0.8-1-1.1c0.2,0.2,0.3,0.4,0.4,0.6c0.5,0.9,0.8,2.1,0.8,3.9v1.5 		c0,1.2,0.1,1.8,0.1,2c0.1,0.4,0.3,0.7,0.6,0.9l0.1,0.1c-0.1-0.1-0.1-0.2-0.2-0.4c0-0.2-0.1-0.7-0.1-2 		C61.5,19.5,61.5,17.9,61.5,17.9z" />
            <path d="M10.2,5.3c1,0,1.8,0.1,2.5,0.3c0,0,0,0,0.1,0c-0.2-0.3-0.4-0.5-0.6-0.6c-0.6-0.2-1.4-0.3-2.4-0.3H5.3v3.7h0.6V5.3H10.2z" />
            <path d="M17.1,22.5c0.7-0.5,1.3-1.2,1.8-2c0.7-1.2,1.1-2.5,1.1-4c0-1.4-0.3-2.7-1-3.7c-0.3-0.4-0.7-0.8-1.1-1.2 		c0.2,0.2,0.4,0.4,0.5,0.6c0.7,1,1,2.3,1,3.7c0,1.5-0.4,2.8-1.1,4c-0.5,0.8-1.1,1.4-1.8,2c-0.8,0.6-1.8,1-2.8,1.3 		c-1,0.2-2.2,0.3-3.4,0.3H0v0.6h10.9c1.2,0,2.3-0.1,3.4-0.3C15.4,23.5,16.3,23.1,17.1,22.5z" />
            <polygon points="39.6,18.7 39.6,23.5 21.6,23.5 21.6,24.1 40.2,24.1 40.2,18.7 	" />
            <path d="M42.8,0.1v22.8h4.6V14H52c1.3,0,2.2,0.2,2.7,0.7c0.6,0.4,0.8,1.4,0.8,2.9v2.1c0,0.7,0.1,1.3,0.2,2c0.1,0.3,0.2,0.7,0.3,1.2 		h5.2v-0.6c-0.5-0.3-0.8-0.7-0.9-1.3c-0.1-0.4-0.1-1.1-0.1-2.1v-1.5c0-1.6-0.2-2.8-0.7-3.6c-0.4-0.8-1.2-1.4-2.2-1.8 		c1.3-0.4,2.2-1.2,2.7-2.2s0.8-2.1,0.8-3.2c0-0.9-0.1-1.7-0.4-2.4c-0.3-0.7-0.7-1.3-1.1-1.9c-0.6-0.7-1.3-1.2-2.1-1.6 		s-2-0.6-3.6-0.6H42.8z M52.7,4c1,0,1.7,0.1,2.2,0.4c0.9,0.5,1.3,1.4,1.3,2.8c0,1.3-0.4,2.1-1.3,2.6c-0.5,0.2-1.3,0.4-2.3,0.4h-5.1 		V4.1L52.7,4L52.7,4z" />
            <polygon points="27,13.6 27,18.1 27.6,18.1 27.6,14.1 38.7,14.1 38.7,8.8 38.1,8.8 38.1,13.6 	" />
            <path d="M53.2,5.3c1.1,0,1.6,0.2,1.9,0.3l0,0l0,0C55,5.4,54.8,5.2,54.5,5c-0.3-0.1-0.8-0.3-1.9-0.3H48v4.8h0.6V5.3H53.2z" />
          </g>
        </svg> </a>
      <div class="header__dateWrap">
        <div class="header__date schnyder xs">dal 1857</div>
      </div>
    </header>
    <div class="progBar hidden-xs" id="prog">
      <div class="progBar__inner" id="progbar"></div>
    </div>
    <div class="mainNav"><img class="mainNav__img" src="<?php echo site_url(); ?>/wp-content/uploads/images/svg/preloader.svg" />
      <div class="mainNav__close close"><span class="close__curt"></span></div>
      <div class="mainNav__wrap">
        <div class="mainNav__col mainNav__col--left">
          <nav id="main_nav" class="menu-main_nav-container">
            <ul id="menu-main_nav" class="nav navbar-nav">
            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21 menu-page-8"><a href="<?php echo home_url( '/' ) ?>">Home</a></li>
              <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21 menu-page-8"><a href="<?php echo home_url( '/about-us' ) ?>">About us</a></li>
              <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20 menu-page-10"><a href="<?php echo home_url( '/style' ) ?>">Style</a></li>
              <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19 menu-page-12"><a href="<?php echo get_post_type_archive_link('wine'); ?>">Wines</a></li>
              </ul>
          </nav>
        </div>
        <div class="mainNav__col mainNav__col--right">
          <div class="mainNav__mobileWrap">
            <nav id="side_nav" class="menu-side_nav-container">
              <ul id="menu-side_nav" class="nav navbar-nav">
                <li id="menu-item-29" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29 menu-category-2"><a href="<?php echo home_url( '/news-press' ) ?>">News &amp; Press</a></li>
                <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30 menu-page-16"><a href="<?php echo home_url( '/contact-us' ) ?>">Contact</a></li>
              </ul>
            </nav>

          </div>
          <div class="social">
            <ul class="social__list">
              <li><a title="https://www.facebook.com/cantine.bertani" href="https://www.facebook.com/cantine.bertani" target="_blank" rel="noopener noreferrer">facebook</a></li>
              <li><a title="https://www.instagram.com/cantine_bertani/" href="https://www.instagram.com/cantine_bertani/" target="_blank" rel="noopener noreferrer">instagram</a></li>
            </ul>
          </div>
        </div>
        <div class="mainNav__priv">
          <ul>
            <li><a class="magic-scale" href="<?php echo home_url( '/cookie-policy' ) ?>" title="Cookie Policy" target="_blank" rel="noopener noreferrer">Cookie Policy</a></li>
            <li><a class="magic-scale" href="<?php echo home_url( '/legal-notes' ) ?>" title="Legal Notes" target="_blank" rel="noopener noreferrer">Legal Notes</a></li>
          </ul>
        </div>
      </div>
    </div>
    