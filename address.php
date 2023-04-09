<?php
/*
Template Name: Шаблон страницы адреса
Template Post Type: post
*/
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
	
	
    <div class="wrapper">

        <script type="text/javascript" src="<?php the_field('ssylka') ?>"></script>

		
        <?php get_sidebar(); ?>
        <?php get_header(); ?>

        <main class="main">

            <section class="info">
                <div class="container">
                    <div class="info__block">
                        <img class="info__img" src="<?php the_field('foto_lokaczii') ?>" alt="">
                    </div>
                    <div class="info__block">
                        <h2 class="info__address">
                            <?php the_title() ?>
                        </h2>
                        <a class="info__btn" href="<?php the_field('knopka_rezervaczii_ssylka') ?>" target='_blank'>
                            <?php the_field('knopka_rezervaczii_tekst') ?>
                        </a>
                    </div>
                </div>
            </section>

            <section class="services services-address" id="service">
                <div class="container">
                    <div class="services__wrapper">
                        <h2 class="services__title">
                            USŁUGI
                        </h2>
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
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                        ?>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /.services -->

            <section class="gallery">
                <div class="container">
                    <h2 class="gallery__title">ZOBACZ CO MOŻEMY DLA CIEBIE STWORZYĆ</h2>
                    <div class="gallery__slider">
                        <?php
                            global $post;

                            $myposts = get_posts([ 
                                'numberposts' => 30,
                                'category_name'    => 'galereya',
                                'order' => 'ASC'
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                        <div class="gallery__slide">
                                            <img src="<?php the_field('photo') ?>" data-fancybox="gallery">
                                        </div>
                                    <?php 
                                }
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>

                    <a class="gallery__btn" href="<?php echo get_option('instagram'); ?>" target="_blank">
                        ZOBACZ więcej na instagramie             
                    </a>
                </div>
            </section>
            <!-- /.gallery -->


            
        </main>
        <!-- /.main -->
        
        <?php get_footer('other'); ?>
        
        <a href="tel:<?php echo get_option('phone'); ?>">
            <div class="callback-bt">
                <div class="text-call">
                    <span>Zadzwoń</span>
                </div>
            </div>
        </a>
        <!-- /.call -->

    </div>
    <!-- /.wrapper -->

    <?php wp_footer(); ?>
    <!-- /.foot -->

</body>

</html>