<?php
/*
Plugin Name: Adios Addons
Plugin URI: http://www.designlazy.com
Description: A part of Adios theme.
Version: 1.5
Author: relstudiosnx
Author URI: http://www.designlazy.com
Text Domain: adios-addons
*/

// Define Constants
defined('RS_ROOT') or define('RS_ROOT', plugin_dir_path( __FILE__ ));

/**
 * Shortcodes
 */
if(!class_exists('RS_Shortcode')) {
  /**
   * Main plugin class
   */
  class RS_Shortcode {

    private $assets_css;
    private $assets_js;

  
    public function __construct() {
      add_action('init', array($this,'rs_init'),50);
      add_action('setup_theme', array($this,'rs_load_custom_post_types'),40);
      add_action('widgets_init', array($this,'rs_load_widgets'),50);
    }

  /**
   * Plugin activation
   */
  public static function activate() {
    flush_rewrite_rules();
  }

  /**
   * Plugin deactivation
   */
  public static function deactivate() {
    flush_rewrite_rules();
  }

  /**
   * Init
   */
  public function rs_init() {

    if (!defined('ADIOS_THEME_ACTIVATED') || ADIOS_THEME_ACTIVATED !== true) {
       add_action( 'admin_notices', array($this,'rs_activate_theme_notice') );
    } else {

      require_once(RS_ROOT .'/extras/extras.php');
      

      $this->assets_css = plugins_url('/composer/assets/css', __FILE__);
      $this->assets_js  = plugins_url('/composer/assets/js', __FILE__);
      add_action( 'admin_print_scripts-post.php',   array($this, 'rs_load_vc_scripts'), 99);
      add_action( 'admin_print_scripts-post-new.php', array($this, 'rs_load_vc_scripts'), 99);
      add_action('vc_load_default_params', array($this, 'rs_reload_vc_js'));
      if(class_exists('Vc_Manager')) {
        $this->rs_vc_load_shortcodes();
        $this->rs_init_vc();
        $this->rs_vc_integration();
      }
    }
  }

  /**
   * Print theme notice
   */
  function rs_activate_theme_notice() { ?>
    <div class="updated">
      <p><strong><?php esc_html_e('Please activate the Adios theme to use Adios Addons plugin.', 'adios-addons'); ?></strong></p>
      <?php
      $screen = get_current_screen();
      if ($screen -> base != 'themes'): ?>
        <p><a href="<?php echo esc_url(admin_url('themes.php')); ?>"><?php esc_html_e('Activate theme', 'adios-addons'); ?></a></p>
      <?php endif; ?>
    </div>
  <?php }

  /**
   * Init VC integration
   * @global type $vc_manager
   */
    public function rs_init_vc() {
      global $vc_manager;
      $vc_manager->setIsAsTheme();
      $vc_manager->disableUpdater();
      $list = array( 'page', 'post', 'portfolio', 'special-content' );
      $vc_manager->setEditorDefaultPostTypes( $list );
      $vc_manager->setEditorPostTypes( $list ); //this is required after VC update (probably from vc 4.5 version)
      //$vc_manager->frontendEditor()->disableInline(); // enable/disable vc frontend editior
      $vc_manager->automapper()->setDisabled();
    }

  /**
   * Load custom post types
   */
  public function rs_load_custom_post_types() {
    require_once(RS_ROOT .'/custom-posts/social-site.php');
    require_once(RS_ROOT .'/custom-posts/team.php');
    require_once(RS_ROOT .'/custom-posts/testimonial.php');
    require_once(RS_ROOT .'/custom-posts/portfolio.php');
  }

  /**
   * Load widgets
   */
  public function rs_load_widgets() {
    if (!defined('ADIOS_THEME_ACTIVATED') || ADIOS_THEME_ACTIVATED !== true) {
      return false;
    }
    $widgets = array(
      //'WP_Contact_Details_Widget',
      'WP_Instagram_Feed_Widget',
      'WP_Latest_Posts_Widget',
      'WP_Latest_Tweets_Widget',
      //'WP_Social_Icons_Widget',
    );
    foreach ($widgets as $widget) {
      if (file_exists(RS_ROOT .'/widgets/'.$widget.'.class.php')) {
        require_once(RS_ROOT .'/widgets/'.$widget.'.class.php');
        register_widget('adios_'.$widget);
      }
    }
  }

  public function rs_vc_load_shortcodes() {
    require_once(RS_ROOT. '/' . 'shortcodes/rs_hero_slider.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_section_heading.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_image_block.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_blockquote.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_icon_box.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_latest_works.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_team.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_blog.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_pricing_table.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_client.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_testimonial.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_counter.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_follow.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_hero_video_banner.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_tweet.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_google_map.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_portfolio_slider.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_blog_slider.php');
    require_once(RS_ROOT. '/' . 'shortcodes/rs_special_text.php');


    require_once(RS_ROOT. '/' . 'shortcodes/vc_column.php');
    require_once(RS_ROOT. '/' . 'shortcodes/vc_column.php');
    require_once(RS_ROOT. '/' . 'shortcodes/vc_column_text.php');
    require_once(RS_ROOT. '/' . 'shortcodes/vc_row.php');
  }

  public function rs_vc_integration() {
    require_once( RS_ROOT .'/' .'composer/map.php' );
  }

  /**
   * Loand vc scripts
   */
    public function rs_load_vc_scripts() {
      wp_enqueue_style( 'rs-vc-custom', $this->assets_css. '/vc-style.css' );
      wp_enqueue_style( 'rs-font-icon', $this->assets_css. '/font-icon.css' );
      wp_enqueue_style( 'rs-chosen',    $this->assets_css. '/chosen.css' );
      wp_enqueue_script( 'vc-script',   $this->assets_js . '/vc-script.js' ,      array('jquery'), '1.0.0', true );
      wp_enqueue_script( 'vc-chosen',   $this->assets_js . '/jquery.chosen.js' ,  array('jquery'), '1.0.0', true );
    }

    /**
    * Reload JS
    */
    public function rs_reload_vc_js() {
      echo '<script type="text/javascript">(function($){ $(document).ready( function(){ $.reloadPlugins(); }); })(jQuery);</script>';
    }

  } // end of class

  new RS_Shortcode;

  register_activation_hook( __FILE__, array( 'RS_Shortcode', 'activate' ) );
  register_deactivation_hook( __FILE__, array( 'RS_Shortcode', 'deactivate' ) );

} // end of class_exists


