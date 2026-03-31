<?php
/**
 * Block Styles
 *
 * @package tennis_club
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function tennis_club_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'tennis-club-padding-0',
				'label' => esc_html__( 'No Padding', 'tennis-club' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'tennis-club-post-author-card',
				'label' => esc_html__( 'Theme Style', 'tennis-club' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'tennis-club-button',
				'label'        => esc_html__( 'Plain', 'tennis-club' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'tennis-club-post-comments',
				'label'        => esc_html__( 'Theme Style', 'tennis-club' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'tennis-club-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'tennis-club' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'tennis-club-wp-table',
				'label'        => esc_html__( 'Theme Style', 'tennis-club' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'tennis-club-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'tennis-club' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'tennis-club-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'tennis-club' ),
			)
		);
	}
	add_action( 'init', 'tennis_club_register_block_styles' );
}
