<?php
/**
 * Block Filters
 *
 * @package tennis_club
 * @since 1.0
 */

function tennis_club_block_wrapper( $tennis_club_block_content, $tennis_club_block ) {

	if ( 'core/button' === $tennis_club_block['blockName'] ) {
		
		if( isset( $tennis_club_block['attrs']['className'] ) && strpos( $tennis_club_block['attrs']['className'], 'has-arrow' ) ) {
			$tennis_club_block_content = str_replace( '</a>', tennis_club_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $tennis_club_block_content );
			return $tennis_club_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $tennis_club_block['blockName'] ) {
			if( 'post_tag' === $tennis_club_block['attrs']['term'] ) {
				$tennis_club_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . tennis_club_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $tennis_club_block_content );
			}

			if( 'category' ===  $tennis_club_block['attrs']['term'] ) {
				$tennis_club_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . tennis_club_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $tennis_club_block_content );
			}
			return $tennis_club_block_content;
		}
		if ( 'core/post-date' === $tennis_club_block['blockName'] ) {
			$tennis_club_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . tennis_club_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $tennis_club_block_content );
			return $tennis_club_block_content;
		}
		if ( 'core/post-author' === $tennis_club_block['blockName'] ) {
			$tennis_club_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . tennis_club_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $tennis_club_block_content );
			return $tennis_club_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $tennis_club_block['blockName'] ) {
			if( isset( $tennis_club_block['attrs']['type'] ) && 'previous' === $tennis_club_block['attrs']['type'] ) {
				$tennis_club_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . tennis_club_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $tennis_club_block_content );
			}
			else {
				$tennis_club_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . tennis_club_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $tennis_club_block_content );
			}
			return $tennis_club_block_content;
		}
		if ( 'core/post-date' === $tennis_club_block['blockName'] ) {
            $tennis_club_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . tennis_club_get_svg( array( 'icon' => 'calendar' ) ), $tennis_club_block_content );
            return $tennis_club_block_content;
        }
		if ( 'core/post-author' === $tennis_club_block['blockName'] ) {
            $tennis_club_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . tennis_club_get_svg( array( 'icon' => 'user' ) ), $tennis_club_block_content );
            return $tennis_club_block_content;
        }

	}
    return $tennis_club_block_content;
}
	
add_filter( 'render_block', 'tennis_club_block_wrapper', 10, 2 );
