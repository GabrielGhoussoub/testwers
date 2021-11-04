<?php get_header(); ?>
<div id="main_cont">
    <section class="pageWrapper" data-scroll-container>
        <article class="pageIntro" data-scroll data-scroll-section data-scroll-repeat="true">
            <div class="pageIntro__top space-between">

            <a class="pageIntro__btn button button--inverse button--small button--blackWhite" href="<?php echo home_url( '/style' ) ?>">
            <span class="button__round"></span><strong class="button__label">Style</strong></a>

            <!-- <a class="pageIntro__btn button button--small button--blackWhite" href="<?php echo home_url( '/' ) ?>">
            <strong class="button__label">Territory</strong><span class="button__round"></span></a> -->
        
        </div>
            <div class="pageIntro__numWrap text-center">
                <h1 class="pageIntro__title title neue-haas bold xxl">Wines</h1><span class="pageIntro__num sxl schneyder bold">03</span>
            </div>
        </article>
        <article class="wl" data-scroll-section>


            <div class="wl__wrap" id="wl-tradition">
                <div class="wl__trigger">
                    <h3 class="wl__tit title neue-haas l red">Tradition<sup class="wl__sup schnyder demi xs">03</sup></h3>
                    <div class="wl__close"></div>
                </div>
                <div class="wl__cont">
                    <?php
                    $Tradition = new WP_Query(array(
                        'post_type' => 'wine',
                        'meta_query' => array(
                            array(
                                'key' => 'category',
                                'compare' => '=',
                                'value' => 'Tradition'
                            )
                        )
                    ));
                    while ($Tradition->have_posts()) {
                        $Tradition->the_post();
                    ?>
                        <a href="<?php the_permalink(); ?>" title="Amarone della Valpolicella Classico" class="wl__block">
                            <div class="wl__blockImg"><img class="" src="<?php echo get_field('image_url'); ?>" alt="Amarone della Valpolicella Classico"></div>
                            <div class="wl__wineText">
                                <h3 class="wl__name m neue-haas bold"><?php echo get_field('name'); ?></h3>
                                <h4 class="wl__sub schnyder light sssm"><?php echo get_field('description'); ?></h4>
                            </div>
                        </a>

                        <!-- <a href="tradition/catullo-valpolicella-ripasso-classico-superiore/index.html" title="Catullo" class="wl__block">
                                <div class="wl__blockImg"><img class="" src="../wp-content/uploads/2021/04/catullo_bt.png" alt="Catullo"></div>
                                <div class="wl__wineText">
                                    <h3 class="wl__name m neue-haas bold">Catullo</h3>
                                    <h4 class="wl__sub schnyder light sssm">Valpolicella Ripasso Classico Superiore</h4>
                                </div>
                            </a>

                            <a href="tradition/recioto-della-valpolicella-valpantena/index.html" title="Recioto della Valpolicella Valpantena" class="wl__block">
                                <div class="wl__blockImg"><img class="" src="../wp-content/uploads/2021/09/recioto_Valpantena.png" alt="Recioto della Valpolicella Valpantena"></div>
                                <div class="wl__wineText">
                                    <h3 class="wl__name m neue-haas bold">Recioto della Valpolicella Valpantena</h3>
                                    <h4 class="wl__sub schnyder light sssm">Recioto della Valpolicella Valpantena</h4>
                                </div>
                            </a> -->
                    <?php
                    }
                    ?>
                </div>
            </div>

            <?php wp_reset_postdata();
            ?>

            <div class="wl__wrap" id="wl-territory">
                <div class="wl__trigger">
                    <h3 class="wl__tit title neue-haas l red">Territory<sup class="wl__sup schnyder demi xs">04</sup></h3>
                    <div class="wl__close"></div>
                </div>
                <div class="wl__cont two">
                    <?php
                    $Tradition = new WP_Query(array(
                        'post_type' => 'wine',
                        'meta_query' => array(
                            array(
                                'key' => 'category',
                                'compare' => '=',
                                'value' => 'Territory'
                            )
                        )
                    ));
                    while ($Tradition->have_posts()) {
                        $Tradition->the_post();
                    ?>

                        <a href="<?php the_permalink(); ?>" title="Amarone della Valpolicella Valpantena" class="wl__block">
                            <div class="wl__blockImg">
                                <img class="" src="<?php echo get_field('image_url'); ?>" alt="Amarone della Valpolicella Valpantena">
                            </div>
                            <div class="wl__wineText">
                                <h3 class="wl__name m neue-haas bold"><?php echo get_field('name'); ?></h3>
                                <h4 class="wl__sub schnyder light sssm"><?php echo get_field('description'); ?></h4>
                            </div>
                        </a>

                        <!-- <a href="territory/valpolicella-valpantena/index.html" title="Valpolicella Valpantena" class="wl__block">
                        <div class="wl__blockImg"><img class="" src="../wp-content/uploads/2021/09/valpolicella_Valpantena.png" alt="Valpolicella Valpantena"></div>
                        <div class="wl__wineText">
                            <h3 class="wl__name m neue-haas bold">Valpolicella Valpantena</h3>
                            <h4 class="wl__sub schnyder light sssm">Valpolicella Valpantena</h4>
                        </div>
                    </a>
                    
                    <a href="territory/valpolicella-ripasso-valpantena/index.html" title="Valpolicella Ripasso Valpantena" class="wl__block">
                        <div class="wl__blockImg"><img class="" src="../wp-content/uploads/2021/09/ripasso_Valpantena.png" alt="Valpolicella Ripasso Valpantena"></div>
                        <div class="wl__wineText">
                            <h3 class="wl__name m neue-haas bold">Valpolicella Ripasso Valpantena</h3>
                            <h4 class="wl__sub schnyder light sssm">Valpolicella Ripasso Valpantena</h4>
                        </div>
                    </a>
                    
                    <a href="territory/sereole/index.html" title="Sereole" class="wl__block">
                        <div class="wl__blockImg"><img class="" src="../wp-content/uploads/2021/05/sereole-soave_bott-1.png" alt="Sereole"></div>
                        <div class="wl__wineText">
                            <h3 class="wl__name m neue-haas bold">Sereole</h3>
                            <h4 class="wl__sub schnyder light sssm">Soave</h4>
                        </div>
                    </a> -->
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            wp_reset_postdata();
            ?>


            <div class="wl__wrap" id="wl-cru">
                <div class="wl__trigger">
                    <h3 class="wl__tit title neue-haas l red">Cru<sup class="wl__sup schnyder demi xs">02</sup></h3>
                    <div class="wl__close"></div>
                </div>
                <div class="wl__cont two">
                    <?php
                    $Tradition = new WP_Query(array(
                        'post_type' => 'wine',
                        'meta_query' => array(
                            array(
                                'key' => 'category',
                                'compare' => '=',
                                'value' => 'Cru'
                            )
                        )
                    ));
                    while ($Tradition->have_posts()) {
                        $Tradition->the_post();
                    ?>

                        <a href="<?php the_permalink(); ?>" title="Ognisanti Di Novare" class="wl__block">
                            <div class="wl__blockImg">
                                <img class="" src="<?php echo get_field('image_url'); ?>" alt="Amarone della Valpolicella Valpantena">
                            </div>
                            <div class="wl__wineText">
                                <h3 class="wl__name m neue-haas bold"><?php echo get_field('name'); ?></h3>
                                <h4 class="wl__sub schnyder light sssm"><?php echo get_field('description'); ?></h4>
                            </div>
                        </a>
                        <!--
                    <a href="cru/le-miniere-di-novare/index.html" title="Le Miniere di Novare" class="wl__block">
                        <div class="wl__blockImg"><img class="" src="../wp-content/uploads/2021/05/leMiniere-2019_bt.png" alt="Le Miniere di Novare"></div>
                        <div class="wl__wineText">
                            <h3 class="wl__name m neue-haas bold">Le Miniere di Novare</h3>
                            <h4 class="wl__sub schnyder light sssm">Valpolicella Classico</h4>
                        </div>
                    </a> -->
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            wp_reset_postdata();
            ?>



            <div class="wl__wrap" id="wl-originalvintage">
                <div class="wl__trigger">
                    <h3 class="wl__tit title neue-haas l red">Original Vintage<sup class="wl__sup schnyder demi xs">02</sup></h3>
                    <div class="wl__close"></div>
                </div>
                <?php
                $Tradition = new WP_Query(array(
                    'post_type' => 'wine',
                    'meta_query' => array(
                        array(
                            'key' => 'category',
                            'compare' => '=',
                            'value' => 'Original Vintage'
                        )
                    )
                ));
                while ($Tradition->have_posts()) {
                    $Tradition->the_post();
                ?>
                    <div class="wl__cont two"><a href="<?php the_permalink(); ?>" title="Soave Vintage" class="wl__block">
                            <div class="wl__blockImg">
                                <img class="" src="<?php echo get_field('image_url'); ?>" alt="Amarone della Valpolicella Valpantena">
                            </div>
                            <div class="wl__wineText">
                                <h3 class="wl__name m neue-haas bold"><?php echo get_field('name'); ?></h3>
                                <h4 class="wl__sub schnyder light sssm"><?php echo get_field('description'); ?></h4>
                            </div>
                        </a>
                    <?php
                }
                    ?>


                    </div>
            </div>

</div>
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
 html.classList.remove('eshop');  html.classList.add('wines');
 header.classList.add('beige'); </script> 

<?php get_footer(); ?>