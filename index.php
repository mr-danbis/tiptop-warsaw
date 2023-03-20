<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php bloginfo('name'); ?></title>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55384CH');</script>
<!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55384CH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
    <div class="wrapper">
		
		<script type="text/javascript" src="https://booksy.com/widget/code.js?id=117586&country=pl&lang=pl"></script>

        <?php get_sidebar(); ?>

        <div class="box">

         <?php get_header(); ?>

            <section class="start">
                <?php
                    global $post;

                    $myposts = get_posts([ 
                        'category_name'    => 'start'
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>

                                <div class="container">
                                    <div class="start__wrapper">
                                        <h1 class="start__title">
                                            <?php the_title(); ?>
                                        </h1>
                                        <?php the_content(); ?>
                                        <a class="start__btn" href="<?php the_field('Кнопка стартового блока (ссылка)', 42); ?>" target="_blank"><?php the_field('Кнопка стартового блока (текст)', 42); ?></a>
                                    </div>
                                </div>
                    
                                <img class="start__img" src="<?php the_field('Картинка в блоке старт'); ?>" alt="Photo">
                                
                        <?php 
                            }

                            } else {
                                // Постов не найдено
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                        ?>

            </section>
            <!-- /.start -->
        </div>


        <main class="main">

            <section class="about" id="about-us">
                <div class="container">
                    <div class="about__wrapper">
                            <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'category_name'    => 'about',
                                    
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                            <div class="about__info">

                                                <h2 class="about__title"><?php the_title(); ?></h2>
                                                <div class="about__texts">
                                                    
                                                    <?php the_content(); ?>

                                                    <div class="about__advantages">
                                                        <?php
                                                            global $post;

                                                            $myposts = get_posts([ 
                                                                'category_name'    => 'advantages_list',
																'order' => 'ASC'
                                                            ]);

                                                            if( $myposts ){
                                                                foreach( $myposts as $post ){
                                                                    setup_postdata( $post );
                                                                    ?>
                                                                        <div class="about__advantages-item">
                                                                            <div class="about__advantages-icon">
                                                                                <img src="<?php the_field('Картинка преимуществ'); ?>">
                                                                            </div>
                                                                            <h3 class="about__advantages-title"><?php the_title(); ?></h3>
                                                                        </div>
                                                                    <?php 
                                                                }
                                                            } else {
                                                                // Постов не найдено
                                                            }

                                                            wp_reset_postdata(); // Сбрасываем $post
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="about__img">
                                                <img src="<?php the_field('Картинка в блоке о нас', 192); ?>">
                                            </div>
                                        <?php 
                                    }
                                } else {
                                    // Постов не найдено
                                }

                                wp_reset_postdata(); // Сбрасываем $post
                            ?>
                    </div>
                </div>
            </section>
            <!-- /.about -->
            <section class="services" id="service">
                <div class="container">
                    <div class="services__wrapper">
                        <?php
                            global $post;

                            $myposts = get_posts([ 
                                'category_name'    => 'services',
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                        <h2 class="services__title"><?php the_title(); ?></h2>
                                    <?php 
                                }
                            } else {
                                // Постов не найдено
                            }

                            wp_reset_postdata(); // Сбрасываем $post
                        ?>

                        <ul class="services__list">

                        <?php
                            global $post;

                            $myposts = get_posts([ 
                                'numberposts' => 30,
                                'category_name'    => 'services_list',
								'order' => 'ASC'
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                    <li class="services__item">
                                        <h3 class="services__item-title"><?php the_title(); ?></h3>
                                        <div class="services__item-price">
                                            <span class="services__item-price_digit"><?php the_field('Цена в услугах') ?></span>
                                            <span class="services__item-price_currency">PLN</span>
                                        </div>
                                    </li>
                                    <?php 
                                }
                            } else {
                                // Постов не найдено
                            }

                            wp_reset_postdata(); // Сбрасываем $post
                        ?>

                        </ul>
                    </div>
                </div>
            </section>
            <!-- /.services -->



            <section class="gallery" id="gallery">
                <div class="container">
                    <?php
                        global $post;

                        $myposts = get_posts([ 
                            'category_name'    => 'gallery'
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <h2 class="gallery__title"><?php the_title(); ?></h2>
                                <?php 
                            }
                        } else {
                            // Постов не найдено
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                    ?>
                    <div class="gallery__slider">
                        <?php
                            global $post;

                            $myposts = get_posts([ 
                                'numberposts' => 30,
                                'category_name'    => 'gallery_list',
                                'order' => 'ASC'
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                        <div class="gallery__slide">
                                            <img src="<?php the_field('Фото') ?>" data-fancybox="gallery">
                                        </div>
                                    <?php 
                                }
                            } else {
                                // Постов не найдено
                            }

                            wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>

                    <a class="gallery__btn" href="<?php the_field('Кнопка блока галлерея (ссылка)'); ?>" target="_blank"><?php the_field('Кнопка блока галлерея (текст)'); ?></a>
                </div>
            </section>
            <!-- /.gallery -->

        </main>
        <!-- /.main -->

        <a href="tel:<?php the_field('Номер телефона (ссылка)'); ?>">
            <div class="callback-bt">
                <div class="text-call">
                    <span><?php the_field('Кнопка вызова (текст)'); ?></span>
                </div>
            </div>
        </a>
        <!-- /.call -->

        <?php get_footer(); ?>

    </div>
    <!-- /.wrapper -->

    <?php wp_footer(); ?>
    <!-- /.foot -->

</body>

</html>