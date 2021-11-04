<?php get_header(); ?>

<div id="main_cont">
  <section class="homeWrapper" id="home-drag" data-scroll-container>
    <article class="homeSec" id="home-visual" data-scroll-section data-scroll data-header="transparent" data-scroll-repeat="true">
      <div class="homeSec__inner vis"><video class="vis__vid" id="home-video-1" data-src="/bert-loop-3.mp4" muted loop playsinline autoplay poster="wp-content/uploads/video/poster.jpg">
          <source src="#" type="video/mp4" />
          <p>Your user agent does not support the HTML5 Video element.</p>
        </video>
        <div class="vis__grad"></div>
        <h1 class="vis__tit white bold neue-haas xl">
          <div class="vis__block">Our history</div>
          <div class="vis__block">is our style</div>
        </h1>
        <div class="vis__slide white helvetica text xxs bold hidden-xs hidden-sm hidden-lg">Scroll or drag sideways to navigate</div>
        <div class="vis__arrow magic-hover magic-hover__square" id="home-visual-btn"><img class="" src="wp-content/uploads/images/svg/home-visual-arrow.svg" /><span class="vis__inner btn btn-mm-light magic-hover magic-hover__square" style="background: #EB5757; position: absolute; z-index: 1000; top: 0;left: 0;"></span></div>
      </div>
    </article>
    <article class="homeSec" id="home-sec-bert" data-scroll data-scroll-offset="30%" data-scroll-section data-header="beige">
      <div class="homeSec__inner bert">
        <div class="homeSec__col bert__col--text" data-scroll data-scroll-offset="30%" data-header="beige">
          <div class="bert__wrap"><img class="bert__img" src="wp-content/uploads/images/svg/bertani-red.svg" />
            <h1 class="bert__tit title neue-haas bold mml">We have never<br /> betrayed<br /> our style<br /> and we never will</h1>
            <div class="bert__text text sm schnyder light">
              <p class="p1">Bertani’s uniqueness lies in<br /> its very style. We have known how to adapt<br /> it over time while rigorously respecting<br /> our ties to tradition.</p>
            </div>
          </div>
        </div>
        <div class="homeSec__imgWrap"><img data-scroll data-scroll-speed="-2" data-scroll-repeat data-header="beige" class="bert__feat homeSec__feat" src="wp-content/uploads/2021/02/bertani.jpg" alt="" /></div>
      </div>
    </article>
    <article class="homeSec homeSec--comp" data-scroll data-scroll-section data-header="beige" data-scroll-repeat="true">
      <div class="homeSec__inner comp">
        <div class="homeSec__col comp__col--text">
          <div class="num comp__num ssxl schnyder bold">01</div>
          <div class="comp__wrap text-center" data-scroll data-scroll-speed="4" data-scroll-direction="vertical" data-header="beige">
            <div class="comp__label neue-haas bold ssm">Bertani</div>
            <h1 class="comp__title title schnyder red l demi">Identity and <br /> authenticity</h1>
            <div class="comp__text text schnyder light sssm">
              <p>Acting responsibly, staying faithful<br /> to our values, accepting the challenge<br /> of sustainability.</p>
            </div>
            <div class="comp__oval text-uppercase schnyder bold base">Verona</div>
            <div class="comp__bottom text-uppercase schnyder bold smallest">Prodotto in Italia</div>
          </div><a class="comp__btn button" data-scroll href="<?php echo home_url('/about-us') ?>" title="Discover our company"><strong class="button__label">Discover our company</strong>
            <div id="comp-btn" class="button__round magic-hover magic-hover__square"></div>
          </a>
        </div>
        <div class="homeSec__imgWrap"><img class="comp__feat homeSec__feat" data-scroll data-scroll-speed="-2" src="wp-content/uploads/2021/02/company-scaled.jpg" alt="" /></div>
      </div>
    </article>
    <article class="homeSec homeTrad" data-scroll data-scroll-section data-scroll-repeat="true" data-scroll-offset="50%" id="tradition" data-header="brown">
      <div class="trad text-center">
        <div class="trad__inner" data-scroll data-scroll-sticky data-scroll-target="#tradition" data-header="brown">
          <div class="num trad__num ssxl schnyder bold">02</div>
          <div class="trad__label white neue-haas ssm bold">Style</div>
          <div class="trad__textMask">
            <div class="trad__innerText">
              <h1 class="trad__title title schnyder white title xxxl" id="trad-text">Tradition for us<br /> is a daily choice,<br /> emerging from<br /> research and<br /> constant assessment.</h1>
              <a class="trad__btn button button--whitelabel" data-scroll data-header="brown" href="<?php echo home_url('/style') ?>" title="Our style revealed"><strong class="button__label">Our style revealed</strong>
                <div id="style-btn" class="button__round magic-hover magic-hover__square"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </article>
    <article class="homeSec" id="home-vini" data-scroll data-scroll-repeat="true" data-scroll-section data-header="beige">
      <div class="homeSec__inner wines" data-scroll>
        <div class="homeSec__imgWrap"><img data-scroll data-scroll-speed="2" class="homeSec__feat" src="wp-content/uploads/2021/02/vini-1.jpg" /></div>
        <div class="homeSec__col wines__col--text" data-scroll data-scroll-offset="30%">
          <div class="wines__wrap wineList">
            <div class="wineList__el">
              <div class="wineList__round">
                <div class="wineList__roundInner schnyder demi xxs"><span class="wineList__roundTop">100</span>
                  <div class="wineList__sep"></div><span class="wineList__roundBot">50 hl</span>
                </div>
                <div class="wineList__roundMask"></div>
              </div>
              <h3 class="wineList__tit title neue-haas l"><a href="<?php echo get_post_type_archive_link('wine'); ?>">Tradition<sup class="wineList__sup schnyder demi xs">03</sup></a></h3>
            </div>
            <div class="wineList__el">
              <div class="wineList__round hid">
                <div class="wineList__roundInner schnyder demi xxs"><span class="wineList__roundTop">0</span>
                  <div class="wineList__sep"></div><span class="wineList__roundBot">50 hl</span>
                </div>
                <div class="wineList__roundMask"></div>
              </div>
              <h3 class="wineList__tit title neue-haas l"><a href="<?php echo get_post_type_archive_link('wine'); ?>">Territory<sup class="wineList__sup schnyder demi xs">04</sup></a></h3>
            </div>
            <div class="wineList__el">
              <div class="wineList__round">
                <div class="wineList__roundInner schnyder demi xxs"><span class="wineList__roundTop">103</span>
                  <div class="wineList__sep"></div><span class="wineList__roundBot">50 hl</span>
                </div>
                <div class="wineList__roundMask"></div>
              </div>
              <h3 class="wineList__tit title neue-haas l"><a href="<?php echo get_post_type_archive_link('wine'); ?>">Cru<sup class="wineList__sup schnyder demi xs">02</sup></a></h3>
            </div>
            <div class="wineList__el">
              <div class="wineList__round hid">
                <div class="wineList__roundInner schnyder demi xxs"><span class="wineList__roundTop">0</span>
                  <div class="wineList__sep"></div><span class="wineList__roundBot">50 hl</span>
                </div>
                <div class="wineList__roundMask"></div>
              </div>
              <h3 class="wineList__tit title neue-haas l"><a href="<?php echo get_post_type_archive_link('wine'); ?>">Original Vintage<sup class="wineList__sup schnyder demi xs">02</sup></a></h3>
            </div>
          </div>
        </div>
        <div class="wineBg lazy" id="home-wine-bg"><video class="vis__vid" id="home-video-2" data-src="/loop_vini_bertani_new-2.mp4" muted loop playsinline autoplay poster="wp-content/uploads/2021/02/vini-bg-scaled.jpg">
            <source src="#" type="video/mp4" />
            <p>Your user agent does not support the HTML5 Video element.</p>
          </video>
          <div class="num wineBg__num ssxl schnyder bold">03</div>
          <div class="wineBg__inner" data-scroll data-scroll-offset="40%">
            <h1 class="wineBg__animEl wineBg__title title white neue-haas xxl">Our wines</h1>
            <div class="wineBg__animEl wineBg__text text white schnyder light sm">
              <p>Speak more about our<br /> values than a thousand words could:<br /> respect, coherence, patience.</p>
            </div><a class="wineBg__btn button button--whitelabel" data-scroll href="<?php echo get_post_type_archive_link('wine'); ?>" title="Discover all wines"><strong class="button__label">Discover all wines</strong>
              <div id="wine-btn" class="button__round magic-hover magic-hover__square"></div>
            </a>
          </div>
        </div>
      </div>
    </article>
    <article class="homeSec text-center" id="home-terr" data-scroll-offset="40%" data-scroll data-header="brown" data-scroll-section data-scroll-repeat="true">
      <div class="num terr__num ssxl schnyder bold" data-scroll data-scroll-sticky data-scroll-target="#home-terr" data-header="brown">04</div>
      <div class="terr__label white neue-haas ssm bold" data-scroll data-scroll-sticky data-scroll-target="#home-terr" data-header="brown">Territory</div><img class="terr__bg hidden-xs" src="wp-content/uploads/images/svg/territory.svg" data-scroll data-scroll-sticky data-scroll-target="#home-terr" data-header="brown" />
      <div class="homeSec__inner">
        <div class="terr">
          <h1 class="terr__title white neue-haas xxl bold">Proudly<br /> Valpolicella</h1><img class="terr__bar" src="wp-content/uploads/images/svg/territory-sep.svg" alt="" />
          <div id="mask-wrap">
            <div class="terr__imgMask"><img src="wp-content/uploads/2021/02/territory.jpg" alt="" /></div>
          </div>
        </div>
        <div class="buss" data-scroll data-header="brown">
          <div class="buss__circle">
            <div class="buss__circleInner"></div>
            <div class="buss__text"><strong class="buss__tit neue-haas white">Valpolicella Classica</strong></div><span class="buss__sep"></span>
            <div class="buss__text"><strong class="buss__coords neue-haas red">45°31′N 10°53′E﻿</strong></div>
          </div>
          <!-- <a class="terr__btn button button--redWhite" href="/territory" title="Explore our land">
              <strong class="button__label">Explore our land</strong>
              <span class="button__round magic-hover magic-hover__square"></span></a> -->
        </div>
      </div>
    </article>
    <article class="homeSec" data-scroll data-scroll-section data-header="beige">
      <div class="homeSec__inner homeNews">
        <h1 class="homeNews__title title red neue-haas">News &amp; Press</h1>
        <div class="homeNews__wrap">
          <div class="homeNews__single">
            <a href="/news-press/pop-up-store-rinascente" title="BERTANI Pop-up store at Rinascente, Milano." class="homeNews__block">
              <div class="homeNews__featWrap"><img class="homeNews__feat" src="wp-content/uploads/2021/09/Pop-Up-BANNER-SITO-600x600.jpg" alt="BERTANI Pop-up store at Rinascente, Milano."></div>
              <div class="homeNews__date red schnyder demi xxs">13 September 2021</div>
              <div class="homeNews__textWrap">
                <h4 class="homeNews__mainTit title neue-haas bold s">BERTANI Pop-up store at Rinascente, Milano.</h4>
                <div class="homeNews__mainText text schnyder light s">
                  <p>45 vintages<br /> of the prestigious historical collection<br /> of Amarone della Valpolicella Classico</p>
                </div>
              </div>
            </a>
          </div>
          <div class="homeNews__single">
            <a href="/news-press/valpolicella-classico-superiore-ognisanti-2018-copy" title="Valpolicella Classico Superiore Ognisanti 2018  Copy" class="homeNews__block">
              <div class="homeNews__featWrap"><img class="homeNews__feat" src="wp-content/uploads/2021/04/ognisanti-3-bicchieri-600x600.jpg" alt="Valpolicella Classico Superiore Ognisanti 2018  Copy"></div>
              <div class="homeNews__date red schnyder demi xxs">13 September 2021</div>
              <div class="homeNews__textWrap">
                <h4 class="homeNews__mainTit title neue-haas bold s">Valpolicella Classico Superiore Ognisanti 2018 Copy</h4>
                <div class="homeNews__mainText text schnyder light s">
                  <p>Tre Bicchieri<br /> del Gambero Rosso</p>
                </div>
              </div>
            </a>
          </div>
          <div class="homeNews__single">
            <a href="news-press/valpolicella-classico-superiore-ognisanti-2018" title="Valpolicella Classico Superiore Ognisanti 2018" class="homeNews__block last">
              <div class="homeNews__featWrap"><img class="homeNews__feat" src="wp-content/uploads/2021/04/ognisanti-3-bicchieri-600x600.jpg" alt="Valpolicella Classico Superiore Ognisanti 2018"></div>
              <div class="homeNews__date red schnyder demi xxs">14 October 2020</div>
              <div class="homeNews__textWrap">
                <h4 class="homeNews__mainTit title neue-haas bold s">Valpolicella Classico Superiore Ognisanti 2018</h4>
                <div class="homeNews__mainText text schnyder light s">
                  <p>Tre Bicchieri<br /> del Gambero Rosso</p>
                </div>
              </div>
            </a>
          </div><a class="homeNews__btn button button--red" href="<?php echo home_url('/news-press') ?>" title="Read all news"><strong class="button__label">Read all news</strong><span class="button__round magic-hover magic-hover__square"></span></a>
        </div>
      </div>
    </article>
    <article class="homeSec" data-scroll-section>
      <div class="homeSec__inner fin">
        <h1 class="fin__title title red schnyder light xxl">We look to the future<br /> while staying firmly<br /> anchored to our past.</h1><a href="<?php echo site_url(); ?>" id="final-btn" class="fin__btn button button--blackWhite"><span class="button__round magic-hover magic-hover__square"></span></a>
      </div>
    </article>
  </section>
  <script type="text/javascript">
    /* Aggiungo classe per pagina all'html */
    var html = document.querySelector('html'),
      header = document.querySelector('header');
    nav = document.querySelector('.mainNav');
    html.classList.remove('archive');
    html.classList.remove('single');
    html.classList.remove('bertani');
    html.classList.remove('contact');
    html.classList.remove('home');
    html.classList.remove('style');
    html.classList.remove('territory');
    html.classList.remove('wine_sheet');
    html.classList.remove('wines');
    html.classList.remove('simple-page');
    html.classList.remove('single');
    html.classList.remove('eshop');
    html.classList.add('home');
    header.classList.add('white');
    console.log(html.classList);
    console.log('yea');
   
  </script>



</div> <!-- chiusura contenuto per animazione -->
</main> <!-- chiusura smoothstate -->
<?php wp_footer(); ?>

</body>


</html>