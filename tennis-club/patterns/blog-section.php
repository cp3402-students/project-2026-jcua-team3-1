<?php
 /**
  * Title: Blog Section
  * Slug: tennis-club/blog-section
  */
?>

<!-- wp:group {"className":"blog-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-section"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"32px"}},"fontFamily":"pacifico"} -->
<h2 class="wp-block-heading has-text-align-center has-pacifico-font-family wow bounceInDown" style="font-size:32px;font-style:normal;font-weight:400"><?php esc_html_e('Latest ','tennis-club'); ?><span><?php esc_html_e('Activities','tennis-club'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image /-->

<!-- wp:post-title {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} /-->

<!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"primary"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"32px"} -->
<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->