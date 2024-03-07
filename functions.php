<?php 

if(!defined('ABSPATH'))
{
    exit;
}

include_once(get_template_directory() . '/lib/helpers.php');
include_once(get_template_directory() . '/lib/utils.php');





//images
add_theme_support( 'post-thumbnails' );





/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {
    
    // style enque
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );


    // <!-- Favicons -->
	wp_enqueue_style( 'style-assets-img',get_template_directory_uri() .'/assets/img/favicon.png');
	wp_enqueue_style( 'style-assets-img',get_template_directory_uri() .'/assets/img/apple-touch-icon.png');


    // <!-- Vendor CSS Files -->
	wp_enqueue_style( 'style-assets-vendor',get_template_directory_uri() .'/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'style-assets-vendor-icofont',get_template_directory_uri() .'/assets/vendor/icofont/icofont.min.css');
	wp_enqueue_style( 'style-assets-vendor-boxicons-css',get_template_directory_uri() .'/assets/vendor/boxicons/css/boxicons.min.css');
	wp_enqueue_style( 'style-assets-vendor-venobox',get_template_directory_uri() .'/assets/vendor/venobox/venobox.css');
	wp_enqueue_style( 'style-assets-vendor-owl.carousel-assets',get_template_directory_uri() .'/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
	wp_enqueue_style( 'style-assets-vendor-owl.carousel-assets-css',get_template_directory_uri() .'/assets/vendor/owl.carousel/assets/owl.theme.green.css');
	wp_enqueue_style( 'style-assets-vendor-aos',get_template_directory_uri() .'/assets/vendor/aos/aos.css');

    // <!-- Template Main CSS File -->
	wp_enqueue_style( 'style-assets-css',get_template_directory_uri() .'/assets/css/style.css');
	wp_enqueue_style( 'style-assets-css-custom',get_template_directory_uri() .'/assets/css/custom.css');
	
 
    
//   <!-- Vendor JS Files -->

	wp_enqueue_script( 'script-assets-vendor-jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js' );
	wp_enqueue_script( 'script-assets-vendor-bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'script-assets-vendor-jquery.easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js' );
	wp_enqueue_script( 'script-assets-vendor-php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js' );
	wp_enqueue_script( 'script-assets-vendor-isotope-layout', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js' );
	wp_enqueue_script( 'script-assets-vendor-venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js' );
	wp_enqueue_script( 'script-assets-vendor-owl.carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js' );
    
	wp_enqueue_script( 'script-assets-vendor-aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js' );

	wp_enqueue_script( 'script-assets-js', get_template_directory_uri() . '/assets/js/main.js' );
	wp_enqueue_script( 'script-assets-js-custom', get_template_directory_uri() . '/assets/js/custom.js' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function my_theme_setup() {
    // Add support for navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
