<?php
	/*
	 * Theme setup
	*/


	function maksimer_theme_setup() {
		// Load textdomain
		load_theme_textdomain( 'maksimer_lang', get_template_directory() . '/assets/languages' );
		remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
        remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);
		add_filter( 'woocommerce_output_related_products_args', 'hff_commerce_child_related_products_args', 99, 3 );
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

		function hff_commerce_child_related_products_args( $args ) {

			//  echo("RELATED :::");
			$args = array(
				'posts_per_page' => 3,
				'columns' => 3,
				'orderby' => 'DESC',
			);
			return $args;
		}
		//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
		remove_action('woocommerce_cart_collaterals','woocommerce_cart_collaterals hook');


		// Declare theme support
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'menus' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_editor_style();

		// Changes default images values
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		set_post_thumbnail_size( 300, 300, true );
		// add_image_size( 'example', 220, 220, array( 'left', 'top' ) );

		// Register menus
		register_nav_menus( array(
			'main-menu' => __( 'Main menu', 'maksimer_lang' ),
		) );
	}
	add_action( 'after_setup_theme', 'maksimer_theme_setup' );

//////
 add_filter( 'woocommerce_checkout_fields' , 'custom_wc_checkout_fields' );

// Change order comments placeholder and label, and set billing phone number to not required.
function custom_wc_checkout_fields( $fields ) {
	unset($fields['order']['order_comments']);
	return $fields;
}



	/*
	 * Customizing the admin sidebar
	*/
	function maksimer_customize_sidebar_menu() {
		remove_menu_page( 'index.php' );
		remove_menu_page( 'separator1' );
		remove_menu_page( 'upload.php' );
		remove_menu_page( 'edit-comments.php' );
		remove_submenu_page( 'themes.php', 'customize.php' );
		remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
		add_management_page( __( 'Updates', 'maksimer_lang' ), __( 'Updates', 'maksimer_lang' ), 'update_core', 'update-core.php' );

		if ( ! current_user_can( 'administrator' ) ) {
			remove_menu_page( 'wpcf7' );
			remove_menu_page( 'tools.php' );
			remove_menu_page( 'edit.php?post_type=acf-field-group' );
			remove_menu_page( 'themes.php' );
			add_menu_page( __( 'Menu' ), __( 'Menu' ), 'edit_theme_options', 'nav-menus.php', '', 'dashicons-menu', 60 );
		}
	}
	add_action( 'admin_menu', 'maksimer_customize_sidebar_menu' );





	/*
	 * Enqueue's all the scripts
	*/
	function maksimer_enqueue_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri(), false, filemtime( get_theme_file_path( 'style.css' ) ), 'all' );
		wp_enqueue_script( 'maksimer', get_theme_file_uri( 'assets/js/min/maksimer.min.js') , array( 'jquery' ), filemtime( get_theme_file_path( 'assets/js/min/maksimer.min.js' ) ) );

		if ( ! is_admin() ) {
			wp_enqueue_script( 'analytics', get_theme_file_uri( 'assets/js/originals/analytics.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'assets/js/originals/analytics.js' ) ), true );
		}
	}
	add_action( 'wp_enqueue_scripts', 'maksimer_enqueue_scripts', 11 );





	/*
	 * Enqueue admin-scripts
	*/
	function maksimer_admin_enqueue() {
		if ( is_admin() ) {
			wp_enqueue_style( 'maksimer_admin_css', get_template_directory_uri() . '/assets/css/admin.css' );
		}
	}
	add_action( 'admin_enqueue_scripts', 'maksimer_admin_enqueue' );






	/*
	 * Change yoast metabox priority
	*/
	function maksimer_wpseo_metabox_priority() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'maksimer_wpseo_metabox_priority' );





	/*
	 * Manage the admin bar, front-end
	*/
	function maksimer_admin_bar() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'widgets' );
		$wp_admin_bar->remove_menu( 'wpseo-menu' );
		$wp_admin_bar->remove_menu( 'wp-logo' );
		$wp_admin_bar->remove_menu( 'dashboard' );
		$wp_admin_bar->remove_menu( 'themes' );
		$wp_admin_bar->remove_menu( 'menus' );
		$wp_admin_bar->remove_menu( 'comments' );
		$wp_admin_bar->remove_menu( 'new-user' );
		$wp_admin_bar->remove_menu( 'new-media' );
	}
	add_action( 'wp_before_admin_bar_render', 'maksimer_admin_bar' );
add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{
	return false;
}




	/*
	 * Modify the customizer (remove css editor)
	*/
	function maksimer_customize_register( $wp_customize ) {
		$wp_customize->remove_control( 'custom_css' );
	}
	add_action( 'customize_register', 'maksimer_customize_register' );

	/*remove sorting*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//bootstrap add

function theme_styles() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');


//for shop page rows
add_filter( 'loop_shop_columns', create_function(  '$columns','return 3;' ) );
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 12;
    return $cols;
}

function theme_js()
{

    global $wp_scripts;

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/min/bootstrap.min.js');
    wp_enqueue_script('my_custom_js', get_template_directory_uri() . '/assets/js/min/jquery-3.2.1.min.js');
   // wp_deregister_script ('maksimer_js', get_template_directory_uri() . '/assets/js/min/maksimer.min.js');
 //   wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    add_action('wp_enqueue_scripts', 'theme_js');

}

/*function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
  //  wp_enqueue_script( 'bootstrap-jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js' );

   // wp_enqueue_script( 'blog-scripts', get_stylesheet_directory_uri() . '/js/clean-blog.min.js' );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );*/

//remove related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

//add content above add to cart button

add_action( 'woocommerce_single_product_summary', 'return_policy', 20 );

function return_policy() {
    echo '<p id="rtrn">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Aenean aliquam, ligula quis ultricies vehicula, odio velit imperdiet felis, 
 vitae vestibulum tellus sem feugiat leo. Nunc molestie, nulla in bibendum feugiat, 
 dui nisi semper lectus, ut vulputate nibh tortor vel mi. Nunc nisi risus, malesuada id augue id, 
 convallis interdum diam. Nam sagittis dictum quam. 
 Interdum et malesuada fames ac ante ipsum primis in faucibus.
  Cras eget auctor leo, vitae aliquet nisi. 
  Sed gravida metus nec metus blandit tempor. Mauris congue, ante nec tincidunt eleifend,
   nisl nisi pellentesque lorem, in condimentum felis massa vitae orci. Cras pharetra venenatis 
   neque. Nullam vehicula ut diam eu pharetra. Maecenas arcu lacus, rhoncus eget nisl id,
    porttitor convallis nisi.
 Maecenas egestas sollicitudin mauris, ut fermentum lectus volutpat non..
 </p>';

}


add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );







?>