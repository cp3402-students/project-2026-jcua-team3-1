<?php

/**
 * Title: Header Media
 * Slug: tennis-club/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":9,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.48,"y":0.48},"minHeight":750,"className":"alignfull slider","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignfull slider" style="min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-9" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" style="object-position:48% 48%" data-object-fit="cover" data-object-position="48% 48%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content","layout":{"type":"default"}} -->
<div class="wp-block-group slider-content"><!-- wp:group {"style":{"color":{"background":"#35382ecc"}},"className":"slider-content-inner","layout":{"type":"default"}} -->
<div class="wp-block-group slider-content-inner has-background wow zoomIn" style="background-color:#35382ecc"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size wow zoomIn" style="font-style:normal;font-weight:600"><?php esc_html_e('The Club Offers You The Best Training!','tennis-club'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"41px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"pacifico"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-pacifico-font-family wow zoomIn" style="margin-top:var(--wp--preset--spacing--40);font-size:41px;font-style:normal;font-weight:400"><?php esc_html_e('Train With Us!','tennis-club'); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"radius":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size wow bounceInDown" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-heading-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Join Our Club Now','tennis-club'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->