<?php get_header(); ?>

<div id="main_cont">
    <section class="pageWrapper" data-scroll-container="">
        <article class="pageIntro" data-scroll="" data-scroll-section="" data-scroll-repeat="true">
            <div class="pageIntro__top space-between"><a class="pageIntro__btn button button--inverse button--small button--blackWhite" href="<?php echo home_url( '/about-us' ) ?>"><span class="button__round"></span><strong class="button__label">About us</strong></a><a class="pageIntro__btn button button--small button--blackWhite" href="<?php echo get_post_type_archive_link('wine');  ?>"><strong class="button__label">Wines</strong><span class="button__round"></span></a></div>
            <div class="pageIntro__numWrap text-center">
                <h1 class="pageIntro__title title neue-haas bold xxl">Style</h1><span class="pageIntro__num sxl schneyder bold">02</span>
            </div>
            <div class="pageIntro__featWrap"><img data-scroll="" data-scroll-speed="-2" class="pageIntro__feat" src="<?php echo site_url(); ?>/wp-content/uploads/2021/03/style-scaled.jpg" alt="Style"></div>
        </article>
        <article class="bertConc pageGen" data-scroll="" data-scroll-section="" data-scroll-repeat="true" data-scroll-offset="30%">
            <h1 class="pageGen__title title schnyder light l">For us tradition is a choice<br> the result of research,<br> assessment, courage<br> and respect for nature.</h1>
            <div class="pageGen__wrap">
                <div class="textCol__col">
                    <div class="textCol__image">
                        <div class="textCol__imgWrap" data-scroll="" data-scroll-speed="-2.5"><img src="<?php echo site_url(); ?>/wp-content/uploads/2021/03/style-gallery-01-900x1127.jpg"></div>
                    </div>
                    <div class="textCol__text text light ivar" data-scroll="" data-scroll-repeat="" data-scroll-offset="50%">
                        <p>Holding fast to a mission for over a century means respecting what has been done and at the same time re-thinking it every day. This is why Bertani wines guarantee quality worthy of their potential and their reputation.</p>
                    </div>
                </div>
                <div class="textCol__col">
                    <div class="textCol__image">
                        <div class="textCol__imgWrap" data-scroll="" data-scroll-speed="2.5"><img src="<?php echo site_url(); ?>/wp-content/uploads/2021/03/style-gallery-02-900x1127.jpg"></div>
                    </div>
                    <div class="textCol__text text light ivar" data-scroll="" data-scroll-repeat="" data-scroll-offset="50%">
                        <p class="p1">We know our winery profoundly and respect the genetic patrimony of our vineyards so as to protect the biodiversity of the land. We use non invasive ecological practices and count on the work of deeply committed men and women.</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="pageIntro__featWrap" data-scroll="" data-scroll-section=""><img data-scroll="" data-scroll-speed="-4" class="bertConc__bottom" src="<?php echo site_url(); ?>/wp-content/uploads/2021/05/style-bottom-1-1200x712.jpg" alt=""></article>
        <article class="bertVal pageGen" data-scroll-section="">
            <h1 class="pageGen__title bertVal__title red neue-haas bold mmml">Bertani styles</h1>
            <div class="pageGen__wrapper">
                <div id="wrapper"></div>
                <div class="pageGen__wrap bertVal__st" data-scroll="" data-scroll-sticky="" data-scroll-target="#wrapper">
                    <div class="bertVal__block">
                        <div class="bertVal__trigger">
                            <h4 class="bertVal__tit neue-haas bold mml">Amarone<span class="bertVal__tit__sub">della Valpollicella Classica</span></h4><a class="bertVal__link btn btn--black" href="../amarone-della-valpolicella-classica/index.html">Learn more</a>
                        </div>
                        <div class="bertVal__imgWrap">
                            <div class="bertVal__imgWrapInner"><img class="bertVal__img" src="<?php echo site_url(); ?>/wp-content/uploads/2021/05/amarone-scaled.jpg"></div>
                        </div>
                    </div>
                    <div class="bertVal__block">
                        <div class="bertVal__trigger">
                            <h4 class="bertVal__tit neue-haas bold mml">Secco Bertani<span class="bertVal__tit__sub">Original Vintage Edition</span></h4><a class="bertVal__link btn btn--black" href="../secco-bertani-original-vintage-edition/index.html">Learn more</a>
                        </div>
                        <div class="bertVal__imgWrap">
                            <div class="bertVal__imgWrapInner"><img class="bertVal__img" src="<?php echo site_url(); ?>/wp-content/uploads/2021/04/style3-scaled.jpg"></div>
                        </div>
                    </div>
                    <div class="bertVal__block">
                        <div class="bertVal__trigger">
                            <h4 class="bertVal__tit neue-haas bold mml">Soave Bertani<span class="bertVal__tit__sub">Original Vintage Edition</span></h4><a class="bertVal__link btn btn--black" href="../soave-bertani-origina-vintage-edition/index.html">Learn more</a>
                        </div>
                        <div class="bertVal__imgWrap">
                            <div class="bertVal__imgWrapInner"><img class="bertVal__img" src="<?php echo site_url(); ?>/wp-content/uploads/2021/05/Bitmap-Copy-8-scaled.jpg"></div>
                        </div>
                    </div>
                    <div class="bertVal__block">
                        <div class="bertVal__trigger">
                            <h4 class="bertVal__tit neue-haas bold mml">I Cru di Bertani<span class="bertVal__tit__sub"></span></h4><a class="bertVal__link btn btn--black" href="../i-cru-di-bertani/index.html">Learn more</a>
                        </div>
                        <div class="bertVal__imgWrap">
                            <div class="bertVal__imgWrapInner"><img class="bertVal__img" src="<?php echo site_url(); ?>/wp-content/uploads/2021/05/cru-scaled.jpg"></div>
                        </div>
                    </div>
                    <div class="bertVal__block bertVal__block--static">
                        <div class="bertVal__trigger"></div>
                        <div class="bertVal__imgWrap"></div>
                    </div>
                </div>
                <div class="fixedEl"></div>
            </div><a href="#" id="to-top" class="bertVal__btn button button--blackWhite button--top"><span class="button__round"></span><strong class="button__label">Back to top</strong></a>
        </article>
        <script type="text/javascript"> /* Aggiungo classe per pagina all'html */
 var html = document.querySelector('html'),
 header = document.querySelector('header');
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
 html.classList.remove('eshop');  html.classList.add('style');
 header.classList.add('beige'); </script>

<?php get_footer(); ?>