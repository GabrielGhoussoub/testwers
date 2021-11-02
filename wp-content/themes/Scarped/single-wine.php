<?php get_header(); ?>

<div id="main_cont">
    <section class="pageWrapper" data-scroll-container>
        <div class="pageIntro__top pageIntro__top--reverse wineIntro__top"><a class="pageIntro__btn button button--small button--blackWhite" href="../../index.html"><strong class="button__label">All wines</strong><span class="button__round"></span></a></div>
        <div id="intro" data-scroll-section>
            <div id="trig"></div>
            <div class="wineIntro" id="wine-intro">
                <div class="wineIntro__wrap">
                    <div class="wineIntro__col"><img data-scroll data-scroll-sticky data-scroll-target="#trig" class="wineIntro__feat" src="../../../wp-content/uploads/2021/04/catullo_bt.png" alt="Catullo"></div>
                    <div class="wineIntro__col">
                        <div class="wineIntro__colInner"><strong class="wineIntro__parent red neue-haas bold">Tradition</strong>
                            <h1 class="wineIntro__name neue-haas bold l">Catullo</h1>
                            <h2 class="wineIntro__denom schnyner light m">Valpolicella Ripasso Classico Superiore</h2>
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
                                        <p>70% Corvina Veronese, 20% Corvinone, 10% Rondinella</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="descList">
                            <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Production zones</strong>
                                <div class="descList__close"></div>
                            </div>
                            <div class="descList__cont text neue-haas base">
                                <p>Valpolicella Classica, Tenuta Novare in Arbizzano di Negrar.</p>
                            </div>
                        </div>
                        <div class="descList">
                            <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Aging of wine </strong>
                                <div class="descList__close"></div>
                            </div>
                            <div class="descList__cont text neue-haas base">
                                <p>In 75-hectoliter French oak barrels for 12 months, plus a further year in 100-hectoliter cement vats.</p>
                            </div>
                        </div>
                        <div class="descList">
                            <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Bottle-aging</strong>
                                <div class="descList__close"></div>
                            </div>
                            <div class="descList__cont text neue-haas base">
                                <p>At least six months.</p>
                            </div>
                        </div>
                        <div class="descList">
                            <div class="descList__trig"><strong class="descList__label red neue-haas bold xxs">Tasting notes</strong>
                                <div class="descList__close"></div>
                            </div>
                            <div class="descList__cont text neue-haas base">
                                <p>Wine of medium structure with elegant spicy notes of vanilla and chocolate accompanied by typical notes of cherry, sour cherry and white pepper. The palate offers the easy drinkability typical of Valpolicella and, at the same time, silky tannic structure and intense, prolonged aromatic persistence. The finish is fresh, soft and savory. A wine in the classic style, elegant, balanced, harmonious.</p>
                            </div>
                        </div><a class="wineDesc__btn btn btn--black" href="../../../wp-content/uploads/2021/07/CatulloENG-1.pdf" target="_blank" rel="noopener noreferrer" title="Data sheet">Data sheet</a>
                    </div>
                </div>
            </div>
        </div>
        <article class="toTop" data-scroll data-scroll-section><a href="#" id="to-top" class="bertVal__btn button button--blackWhite button--top"><span class="button__round"></span><strong class="button__label">Back to top</strong></a></article>
        <footer class="footer" data-scroll data-scroll-section><a class="footer__logo" href="../../../index.html"><img src="../../../images/svg/bertani-domains.svg" /></a>
            <div class="footer__col neue-haas smallest text">
                <div>BERTANI<p>Via Asiago, 1 – 37023 Grezzana (VR)</p>
                </div>
                <div>BERTANI DOMAINS SOCIETÀ AGRICOLA A R.L.<p>Via Roma, 117 – 60031 Castelplanio (AN)</p> REA Ancona 196904 - Cod.Fisc. e P.IVA 02555110424 <br /> Cap.Soc. € 70.000.000.00 I.V.</div>
            </div>
            <div class="footer__menu neue-haas bold smallest text">
                <nav id="footer_nav" class="menu-side_nav-container">
                    <ul id="menu-side_nav-1" class="nav navbar-nav">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332 menu-page-1290"><a target="_blank" rel="noopener" href="../../../e-shop/index.html">E-shop</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29 menu-category-2"><a href="../../../category/news-press/index.html">News &amp; Press</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30 menu-page-16"><a href="../../../contact/index.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </section>
    <script type="text/javascript">
        /* Aggiungo classe per pagina all'html */
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
        html.classList.remove('eshop');
        html.classList.add('wine_sheet');
        header.classList.add('beige');
    </script> <!-- Google Tag Manager (noscript) --> <noscript><iframe src="http://cdn.iubenda.com/cookie_solution/empty.html" height="0" width="0" style="display:none;visibility:hidden" suppressedsrc="https://www.googletagmanager.com/ns.html?id=GTM-NT8TBK6" class=" _iub_cs_activate" data-iub-purposes="2"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
</div> <!-- chiusura contenuto per animazione -->
</main> <!-- chiusura smoothstate -->

<?php get_footer(); ?>