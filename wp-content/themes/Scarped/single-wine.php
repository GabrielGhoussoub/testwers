<?php get_header();
while (have_posts()) {
    the_post();
?>

    <div id="main_cont">
        <section class="pageWrapper" data-scroll-container>
            <div class="pageIntro__top pageIntro__top--reverse wineIntro__top"><a class="pageIntro__btn button button--small button--blackWhite" href="<?php echo home_url('/') ?>"><strong class="button__label">All wines</strong><span class="button__round"></span></a></div>
            <div id="intro" data-scroll-section>
                <div id="trig"></div>
                <div class="wineIntro" id="wine-intro">
                    <div class="wineIntro__wrap">
                        <div class="wineIntro__col"><img data-scroll data-scroll-sticky data-scroll-target="#trig" class="wineIntro__feat" src="<?php echo get_field('image_url'); ?>" alt="Catullo"></div>
                        <div class="wineIntro__col">
                            <div class="wineIntro__colInner"><strong class="wineIntro__parent red neue-haas bold"><?php echo get_field('category'); ?></strong>
                                <h1 class="wineIntro__name neue-haas bold l"><?php echo get_field('name'); ?></h1>
                                <h2 class="wineIntro__denom schnyner light m"><?php echo get_field('description'); ?></h2>
                            </div>
                            <div class="wineIntro__colBot">
                                <div class="wineIntro__colBotInner"><span class="wineIntro__down" id="down-btn"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wineDesc" id="wine-desc">
                    <div class="wineIntro__wrap">
                        <div class="wineDesc__col wineIntro__col"></div>
                        <div class="wineDesc__col wineIntro__col">
                            <h1 class="wineDesc__tit title neue-haas bold ml">A warm, appealing and saline wine.</h1>
                            <div class="descList">
                                <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Grape varieties</strong>
                                    <div class="descList__close"></div>
                                </div>
                                <div class="descList__cont text neue-haas base">
                                    <div class="open_accordion">
                                        <div class="testo_gestionale">
                                            <p><?php echo get_field('grape_varieties'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="descList">
                                <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Production zones</strong>
                                    <div class="descList__close"></div>
                                </div>
                                <div class="descList__cont text neue-haas base">
                                    <p><?php echo get_field('production_zones'); ?></p>
                                </div>
                            </div>
                            <div class="descList">
                                <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Aging of wine </strong>
                                    <div class="descList__close"></div>
                                </div>
                                <div class="descList__cont text neue-haas base">
                                    <p><?php echo get_field('aging_of_wine'); ?></p>
                                </div>
                            </div>
                            <div class="descList">
                                <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Bottle-aging</strong>
                                    <div class="descList__close"></div>
                                </div>
                                <div class="descList__cont text neue-haas base">
                                    <p><?php echo get_field('bottle_aging'); ?></p>
                                </div>
                            </div>
                            <div class="descList">
                                <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Tasting notes</strong>
                                    <div class="descList__close"></div>
                                </div>
                                <div class="descList__cont text neue-haas base">
                                    <p><?php echo get_field('tasting_notes'); ?></p>
                                </div>
                            </div>

                            <a class="wineDesc__btn btn btn--black" href="<?php echo get_field('datasheet'); ?>" target="_blank" rel="noopener noreferrer" title="Data sheet">Data sheet</a>
                        </div>
                    </div>
                </div>
            </div>
            <article class="toTop" data-scroll data-scroll-section><a href="#" id="to-top" class="bertVal__btn button button--blackWhite button--top"><span class="button__round"></span><strong class="button__label">Back to top</strong></a></article>
            <footer class="footer" data-scroll data-scroll-section><a class="footer__logo" href="<?php echo home_url('/') ?>"><img src="../../../images/svg/bertani-domains.svg" /></a>
                <div class="footer__col neue-haas smallest text">
                    <div>BERTANI<p>Via Asiago, 1 – 37023 Grezzana (VR)</p>
                    </div>
                    <div>BERTANI DOMAINS SOCIETÀ AGRICOLA A R.L.<p>Via Roma, 117 – 60031 Castelplanio (AN)</p> REA Ancona 196904 - Cod.Fisc. e P.IVA 02555110424 <br /> Cap.Soc. € 70.000.000.00 I.V.</div>
                </div>
                <div class="footer__menu neue-haas bold smallest text">
                    <nav id="footer_nav" class="menu-side_nav-container">
                        <ul id="menu-side_nav-1" class="nav navbar-nav">
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29 menu-category-2"><a href="<?php echo home_url('/news-press') ?>">News &amp; Press</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30 menu-page-16"><a href="<?php echo home_url('/contact-us') ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </footer>
        </section>
       </div> <!-- chiusura contenuto per animazione -->
    </main> <!-- chiusura smoothstate -->
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
 html.classList.remove('eshop');  html.classList.add('wine_sheet');
 header.classList.add('beige'); </script> 

<?php get_footer();
} ?>