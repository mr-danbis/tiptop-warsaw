<?php
/*
Template Name: Шаблон главной страницы
Template Post Type: page
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
		
        <?php get_sidebar(); ?>

        <div class="box">

            <?php get_header(); ?>

            <section class="start">
                <div class="container">
                    <h1 class="start__title">
                        Wybierz adres
                    </h1>
                    <div class="start__wrapper">
                        <?php
                            global $post;

                            $myposts = get_posts([ 
                                'numberposts' => 2,
                                'category_name'    => 'spisok-adresov',
                                // 'order' => 'ASC',
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                                    ?>
                                        <a class="start__adress" href="<?php echo get_permalink(); ?>">
                                            <img class="start__adress-img" src="<?php the_field('foto_lokaczii') ?>" alt="">
                                            <h3 class="start__adress-title"><?php the_title() ?></h3>
                                        </a>
                                    <?php 
                                }
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>
                </div>
            </section>

        </div>


        <main class="main">

            <section class="about" id="about-us">
                <div class="container">
                    <div class="about__wrapper">
                        <div class="about__info">
                            <h2 class="about__title"><?php the_field('nazvanie_bloka_o_nas'); ?></h2>
                            <div class="about__texts">
                                <p>
                                    <?php the_field('opisanie_bloka_o_nas'); ?>
                                </p>
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
                                        }
                                        wp_reset_postdata(); // Сбрасываем $post
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="about__img">
                            <img src="<?php the_field('kartinka_bloka_o_nas'); ?>">
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.about -->



            <section class="services" id="service">
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

        </main>
        <!-- /.main -->

        <?php get_footer(); ?>

        <a href="tel:<?php echo get_option('phone'); ?>">
            <div class="callback-bt">
                <div class="text-call">
                    <span>Zadzwoń</span>
                </div>
            </div>
        </a>
        <!-- /.call -->


        <div class="footer__bottom">
            © <?php echo date('Y') . ' ' . get_bloginfo('name');?>
        </div>

    </div>
    <!-- /.wrapper -->

    <?php wp_footer(); ?>
    <!-- /.foot -->

</body>

</html>