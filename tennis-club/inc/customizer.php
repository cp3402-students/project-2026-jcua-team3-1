<?php
/**
 * Tennis Club: Customizer
 *
 * @package Tennis Club
 * @subpackage tennis_club
 */

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Tennis_Club_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Tennis_Club_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Tennis_Club_Customize_Section_Pro(
				$manager,
				'tennis_club_section_pro',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Tennis Club Pro', 'tennis-club' ),
					'pro_text' => esc_html__( 'GET PRO', 'tennis-club' ),
					'pro_url'  => esc_url( 'https://www.cretathemes.com/products/tennis-club-wordpress-theme', 'tennis-club' ),
				)
			)
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'tennis-club-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'tennis-club-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Tennis_Club_Customize::get_instance();