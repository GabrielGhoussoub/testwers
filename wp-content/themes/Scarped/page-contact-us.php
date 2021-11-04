<?php get_header(); ?>
<div id="main_cont">
    <section class="pageWrapper" data-scroll-container>
        <article class="cont pageGen" data-scroll data-scroll-section data-scroll-repeat="true">
            <div class="pageIntro__top"><a class="pageIntro__btn button button--small button--blackWhite" href="<?php echo home_url('/about-us') ?>"><strong class="button__label">About us</strong><span class="button__round"></span></a></div>
            <h1 class="cont__title title bold xxl neue-haas">Contact</h1>
            <div class="pageGen__wrap bertConc">
                <div class="textCol__col">
                    <div class="textCol__image">
                        <div class="textCol__imgWrap" data-scroll data-scroll-speed="-2.5"><img src="<?php echo site_url(); ?>/wp-content/uploads/2021/05/cont2.jpg" /></div>
                    </div>
                    <div class="textCol__text text light ivar" data-scroll data-scroll-repeat data-scroll-offset="50%">
                        <p><strong class="cont__intro">Winery</strong></p>
                        <p>Cantine Bertani<br /> Via Asiago, 1<br /> 37023 Grezzana (VR) &#8211; Italia<br /> <a href="https://goo.gl/maps/jQSHmQb6KHhNfeCm9" target="_blank" rel="noopener noreferrer">Google Maps</a></p>
                        <p>Tel. <a href="tel:+390458658461">+39 045 8658461</a><br /> Fax +39 045 8658400</p>
                        <p><a href="mailto:bertani@bertani.net">bertani@bertani.net</a></p>
                    </div>
                </div>
                <div class="textCol__col">
                    <div class="textCol__image">
                        <div class="textCol__imgWrap" data-scroll data-scroll-speed="2.5"><img src="<?php echo site_url(); ?>/wp-content/uploads/2021/05/cont1.jpg" /></div>
                    </div>
                    <div class="textCol__text text light ivar" data-scroll data-scroll-repeat data-scroll-offset="50%">
                        <p><strong class="cont__intro">Visit our <br />store</strong></p>
                        <p>Tel. <a href="tel:+390458658474">+39 045 8658474</a></p>
                        <p><strong>Opening hours:</strong><br /> Monday to Friday:<br /> 9.00 &#8211; 12.30 and 15.00 &#8211; 19.00<br /> Saturday:<br /> 10.00 &#8211; 17.00</p>
                    </div>
                </div>
            </div><a href="#" id="to-top" class="bertVal__btn button button--blackWhite button--top"><span class="button__round"></span><strong class="button__label">Back to top</strong></a>
        </article>
        <footer class="footer" data-scroll data-scroll-section><a class="footer__logo" href="<?php echo home_url('/') ?>"><img src="../images/svg/bertani-domains.svg" /></a>
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


    <?php get_footer(); ?>