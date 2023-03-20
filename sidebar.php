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
        
    </nav>
</sidebar>
<!-- /.sidebar -->