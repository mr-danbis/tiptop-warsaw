<header class="header header--other">
    <div class="container">
        <div class="header__wrapper">

            <button class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
			
			<div class="header__time">
                <?php echo get_option('work_time'); ?>
			</div>

            <div class="header__logo">
                <?php the_custom_logo(); ?>
            </div>


            <nav class="header__nav">
                <?php wp_nav_menu([
					'menu' => 'Верхнее меню',
					'menu_class' => 'header__list',
				]); ?>
            </nav>

            <a class="header__phone" href="tel:<?php echo get_option('phone'); ?>">
                <?php echo get_option('phone'); ?>
            </a>

            <div class="header__lang">
                <?php echo do_shortcode('[gtranslate]'); ?>
            </div>
        </div>
    </div>
</header>
<!-- /.header -->