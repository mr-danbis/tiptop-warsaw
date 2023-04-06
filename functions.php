<?php 

wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css');
wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.min.js');
	wp_enqueue_script( 'jquery' );
}

wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.carousel.min.js', 'jquery', null, true);
wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', 'jquery', null, true);
wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/main.js', 'jquery', null, true);

add_theme_support( 'menus' );
add_theme_support( 'custom-logo' );



/*===================================================================================
* Add global options
* =================================================================================*/

/**
 *
 * The page content surrounding the settings fields. Usually you use this to instruct non-techy people what to do.
 *
 */
function theme_settings_page(){ 
	?>
	<div class="wrap">
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
			?>
		</form>
	</div>
	
	<?php }

/**
 *
 * Next comes the settings fields to display. Use anything from inputs and textareas, to checkboxes multi-selects.
 *
 */

// Phone
function display_phone(){ ?>
	
	<input type="tel" name="phone" placeholder="Введите номер телефона" value="<?php echo get_option('phone'); ?>" size="35">

<?php }

// Email
function display_email(){ ?>
	
	<input type="email" name="email" placeholder="Введите почту" value="<?php echo get_option('email'); ?>" size="35">
	
<?php }

// Working Time
function display_workTime(){ ?>
	
	<input type="text" name="work_time" placeholder="Введите время работы" value="<?php echo get_option('work_time'); ?>" size="100">

<?php }

// Facebook
function display_facebook(){ ?>
	
	<input type="text" name="facebook" placeholder="Введите ссылку на facebook" value="<?php echo get_option('facebook'); ?>" size="100">

<?php }


// Instagram
function display_instagram(){ ?>
	
	<input type="text" name="instagram" placeholder="Введите ссылку на instagram" value="<?php echo get_option('instagram'); ?>" size="100">

<?php }


/**
 *
 * Here you tell WP what to enqueue into the <form> area. You need:
 *
 * 1. add_settings_section
 * 2. add_settings_field
 * 3. register_setting
 *
 */

function display_custom_info_fields(){
	
	add_settings_section("section", "Информация о компании", null, "theme-options");

	add_settings_field("phone", "Номер телефона", "display_phone", "theme-options", "section");
	add_settings_field("email", "Ваша почта", "display_email", "theme-options", "section");
	add_settings_field("work_time", "Время работы", "display_workTime", "theme-options", "section");
	add_settings_field("facebook", "Facebook", "display_facebook", "theme-options", "section");
	add_settings_field("instagram", "Instagram", "display_instagram", "theme-options", "section");

	register_setting("section", "phone");
	register_setting("section", "email");
	register_setting("section", "work_time");
	register_setting("section", "facebook");
	register_setting("section", "instagram");
	
}

add_action("admin_init", "display_custom_info_fields");

/**
 *
 * Tie it all together by adding the settings page to wherever you like. For this example it will appear
 * in Settings > Contact Info
 *
 */

function add_custom_info_menu_item(){
	
	add_options_page("Информация о компании", "Информация о компании", "manage_options", "contact-info", "theme_settings_page");
	
}

add_action("admin_menu", "add_custom_info_menu_item");