<?php get_header(); ?>
<div id="main_cont">
    <section class="pageWrapper" data-scroll-container>
        <div class="commonPage commonPage--page" data-scroll data-scroll-section>
            <div class="commonPage__wrap">
                <h1 class="commonPage__title title">Privacy Policy</h1>
                <div class="commonPage__text text">
                    <p><a href="https://www.iubenda.com/privacy-policy/30879786" class="iubenda-white no-brand iubenda-noiframe iubenda-embed iubenda-noiframe iub-body-embed" title="Privacy Policy">Privacy Policy</a>

                    </p>
                </div>
            </div>
        </div>
        <footer class="footer" data-scroll data-scroll-section><a class="footer__logo" href="https://www.bertani.net"><img src="/images/svg/bertani-domains.svg" /></a>
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
    </section> <!-- Google Tag Manager (noscript) -->
</div> <!-- chiusura contenuto per animazione -->
</main> <!-- chiusura smoothstate -->
<!--<link href="/bertani/css/fonts.css" rel="preload" as="style"><link rel="stylesheet" href="/bertani/css/fonts.css"> -->
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
    html.classList.add('simple-page');
    header.classList.add('beige');
</script>
<?php get_footer(); ?>