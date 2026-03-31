<?php
/**
 * Block Patterns
 *
 * @package tennis_club
 * @since 1.0
 */

function tennis_club_register_block_patterns() {
	$tennis_club_block_pattern_categories = array(
		'tennis-club' => array( 'label' => esc_html__( 'Tennis Club', 'tennis-club' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'tennis-club' ) ),
	);

	$tennis_club_block_pattern_categories = apply_filters( 'tennis_club_tennis_club_block_pattern_categories', $tennis_club_block_pattern_categories );

	foreach ( $tennis_club_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'tennis_club_register_block_patterns', 9 );