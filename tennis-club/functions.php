<?php
/**
 * Tennis Club functions and definitions
 *
 * @package tennis_club
 * @since 1.0
 */

if ( ! function_exists( 'tennis_club_support' ) ) :
	function tennis_club_support() {

		load_theme_textdomain( 'tennis-club', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		/* Theme Credit link */
		define('TENNIS_CLUB_BUY_NOW',__('https://www.cretathemes.com/products/tennis-club-wordpress-theme','tennis-club'));
		define('TENNIS_CLUB_PRO_DEMO',__('https://pattern.cretathemes.com/tennis-club/','tennis-club'));
		define('TENNIS_CLUB_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/tennis-club/','tennis-club'));
		define('TENNIS_CLUB_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/tennis-club/','tennis-club'));
		define('TENNIS_CLUB_SUPPORT',__('https://wordpress.org/support/theme/tennis-club','tennis-club'));
		define('TENNIS_CLUB_REVIEW',__('https://wordpress.org/support/theme/tennis-club/reviews/#new-post','tennis-club'));
		define('TENNIS_CLUB_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','tennis-club'));
		define('TENNIS_CLUB_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','tennis-club'));

	}
endif;

add_action( 'after_setup_theme', 'tennis_club_support' );

if ( ! function_exists( 'tennis_club_styles' ) ) :
	function tennis_club_styles() {
		// Register theme stylesheet.
		$tennis_club_theme_version = wp_get_theme()->get( 'Version' );

		$tennis_club_version_string = is_string( $tennis_club_theme_version ) ? $tennis_club_theme_version : false;
		wp_enqueue_style(
			'tennis-club-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$tennis_club_version_string
		);

		wp_enqueue_style( 'dashicons' );

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		wp_style_add_data( 'tennis-club-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );

		// Enqueue Swiper CSS
		wp_enqueue_style(
		    'tennis-club-swiper-bundle-style',
		    get_template_directory_uri() . '/assets/css/swiper-bundle.css',
		    array(),
		    $tennis_club_version_string
		);

		// Enqueue Swiper JS
		wp_enqueue_script(
		    'tennis-club-swiper-bundle-scripts',
		    get_template_directory_uri() . '/assets/js/swiper-bundle.js',
		    array('jquery'),
		    $tennis_club_version_string,
		    true
		);

		// Enqueue Custom Script (depends on Swiper too)
		wp_enqueue_script(
		    'tennis-club-custom-script',
		    get_template_directory_uri() . '/assets/js/custom-script.js',
		    array('jquery', 'tennis-club-swiper-bundle-scripts'),
		    $tennis_club_version_string,
		    true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'tennis_club_styles' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_tennis-club') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_cretatestimonial_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=tennis-club-guide-page'),
    ]);
});

add_action('wp_ajax_check_creta_testimonial_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $tennis_club_plugin_file = 'creta-testimonial-showcase/creta-testimonial-showcase.php';

    if (is_plugin_active($tennis_club_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';

// Add Getstart admin notice
function tennis_club_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'tennis_club_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_tennis-club-guide-page' && $current_screen->base != 'toplevel_page_cretats-theme-showcase' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing Tennis Club Theme!', 'tennis-club'); ?></h1>
	        <p><a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button get-start-btn">
				   <?php echo __('Nevigate Getstart', 'tennis-club'); ?>
				</a>

				<script type="text/javascript">
				document.getElementById('install-activate-button').addEventListener('click', function () {
				    const tennis_club_button = this;
				    const tennis_club_redirectUrl = '<?php echo esc_url(admin_url("themes.php?page=tennis-club-guide-page")); ?>';
				    // First, check if plugin is already active
				    jQuery.post(ajaxurl, { action: 'check_creta_testimonial_activation' }, function (response) {
				        if (response.success && response.data.active) {
				            // Plugin already active — just redirect
				            window.location.href = tennis_club_redirectUrl;
				        } else {
				            // Show Installing & Activating only if not already active
				            tennis_club_button.textContent = 'Nevigate Getstart';

				            jQuery.post(ajaxurl, {
				                action: 'install_and_activate_creta_testimonial_plugin',
				                nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
				            }, function (response) {
				                if (response.success) {
				                    window.location.href = tennis_club_redirectUrl;
				                } else {
				                    alert('Failed to activate the plugin.');
				                    tennis_club_button.textContent = 'Try Again';
				                }
				            });
				        }
				    });
				});
				</script>

	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'tennis-club'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( TENNIS_CLUB_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'tennis-club'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( TENNIS_CLUB_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'tennis-club'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?tennis_club_admin_notice=1"><?php esc_html_e( 'Dismiss', 'tennis-club' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'tennis_club_admin_notice' );

if( ! function_exists( 'tennis_club_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function tennis_club_update_admin_notice(){
    if ( isset( $_GET['tennis_club_admin_notice'] ) && $_GET['tennis_club_admin_notice'] = '1' ) {
        update_option( 'tennis_club_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'tennis_club_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'tennis_club_getstart_setup_options');
function tennis_club_getstart_setup_options () {
    update_option('tennis_club_admin_notice', FALSE );
}

function tennis_club_google_fonts() {
 
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'tennis_club_google_fonts' );

add_action('admin_bar_menu', 'your_plugin_adminbar_link', 100);
function your_plugin_adminbar_link($wp_admin_bar) {
    $wp_admin_bar->add_node([
        'id'    => 'yourplugin_upgrade',
        'title' => ' Upgrade to Pro',
        'href'  => 'https://www.cretathemes.com/products/tennis-club-wordpress-theme',
        'meta'  => array(
            'target' => '_blank',
        )
    ]);
}