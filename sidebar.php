<sidebar class="sidebar">
    <button class="sidebar__close">
        <img src="<?php echo get_template_directory_uri();?>/images/icons/close.svg" alt="Close sidebar">
    </button>
    <nav class="sidebar__nav">

        <?php wp_nav_menu([
            'menu' => 'Врхнее меню',
            'menu_class' => 'sidebar__list',
        ]); ?>
		
		<a class="sidebar__phone" href="tel:<?php the_field('Номер телефона (ссылка)'); ?>">
			<?php the_field('Номер телефона (кнопка)'); ?>
		</a>

        <div class="sidebar__lang">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>

        <div class="sidebar__adresses">
            <h5 class="sidebar__adresses-title">
                Wybierz adres
            </h5>
            <div class="sidebar__adresses-wrapper">
                <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => 2,
                        'category_name'    => 'spisok-adresov',
                        'order' => 'ASC',
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                                <a class="sidebar__adresses-adress" href="<?php echo get_permalink(); ?>" target="_blank">
                                    <h3 class="sidebar__adresses-adress_title"><?php the_title() ?></h3>
                                </a>
                            <?php 
                        }
                    }
                    wp_reset_postdata(); // Сбрасываем $post
                ?>
            </div>
        </div>
        
    </nav>
</sidebar>
<!-- /.sidebar -->