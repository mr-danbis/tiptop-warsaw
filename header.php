<header class="header">
    <div class="container">
        <div class="header__wrapper">

            <button class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
			
			<div class="header__time">
				<?php the_field('Режим работы'); ?>
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

            <a class="header__phone" href="tel:<?php the_field('Номер телефона (ссылка)'); ?>">
                <?php the_field('Номер телефона (кнопка)'); ?>
            </a>

            <div class="header__lang">
                <?php echo do_shortcode('[gtranslate]'); ?>
            </div>
        </div>
    </div>
</header>
<!-- /.header -->