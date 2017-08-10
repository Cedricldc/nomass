<?php
/**
 * The template includes necessary functions for theme.
 *
 * @package adios
 * @since 1.0
 */
/**
 * Theme options variable $rs_theme_options
 */
define ('REDUX_OPT_NAME', 'adios_theme_options');

/**
 * Theme version used for styles,js
 */
define ('ADIOS_THEME_VERSION','1.0');
/**
 * Setting constant to inform the plugin that theme is activated
 */
define ('ADIOS_THEME_ACTIVATED' , true);

require get_template_directory() . '/framework/includes/rs-theme-argument-class.php';
require get_template_directory() . '/framework/includes/rs-actions-config.php';
require get_template_directory() . '/framework/includes/rs-helper-functions.php';
require get_template_directory() . '/framework/includes/rs-frontend-functions.php';
require get_template_directory() . '/framework/includes/rs-woocommerce-config.php';
require get_template_directory() . '/framework/includes/plugins/tgm/class-tgm-plugin-activation.php';
require get_template_directory() . '/framework/includes/rs-filters-config.php';
require get_template_directory() . '/framework/includes/rs-menu-walker-class.php';
require get_template_directory() . '/framework/admin/admin-init.php';

$username = adios_get_opt( 'envato_username' );
$apikey   = adios_get_opt( 'envato_apikey' );
if( ! empty( $username ) && ! empty( $apikey ) ):
  require get_template_directory() . '/framework/includes/theme-updater/theme-updater.php';
endif;

if( !function_exists('adios_after_setup')) {

  function adios_after_setup() {

    add_image_size('adios-small',         270,  270, true );
    add_image_size('adios-small-alt',     370,  370, true );
    add_image_size('adios-small-hor',     350,  242, true );
    add_image_size('adios-small-ver',     270,  570, true );
    add_image_size('adios-small-square',  270,  270, true );
    add_image_size('adios-medium',        570,  570, true );
    add_image_size('adios-medium-alt',    670,  255, true );
    add_image_size('adios-medium-big',    768,  255, true );
    add_image_size('adios-large-hor',     1170, 270, true );
    add_image_size('adios-large-ver',     900,  900, true );
    add_image_size('adios-large-xxl',     1463, 560, true );
    add_image_size('adios-thumb',         80,   80, true );

    add_theme_support('post-thumbnails');
    add_theme_support('custom-background' );
    add_theme_support('automatic-feed-links' );
    add_theme_support('post-formats',   array('video', 'gallery', 'audio') );
    add_theme_support('title-tag' );

    register_nav_menus (array(
      'primary-menu' => esc_html__( 'Main Menu', 'adios' ),
    ) );
  }
  add_action( 'after_setup_theme', 'adios_after_setup' );
}

if ( ! isset( $content_width ) ) {
  $content_width = 1140;
}

?>
