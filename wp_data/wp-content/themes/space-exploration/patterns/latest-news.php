<?php
/**
 * Title: Latest News
 * Slug: space-exploration/latest-news
 * Categories: space-exploration, latest-news
 */
?>
<!-- wp:group {"className":"latest-news","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|80"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"className":"head-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn"><!-- wp:paragraph {"align":"center","className":"sec-sub-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px","textTransform":"capitalize"},"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color"} -->
<p class="has-text-align-center sec-sub-heading has-text-color-color has-text-color has-link-color" style="margin-top:0;font-size:18px;font-style:normal;font-weight:400;text-transform:capitalize"><?php esc_html_e('our blog','space-exploration'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color-color has-text-color has-link-color has-inter-font-family" style="margin-bottom:0;font-size:30px;text-transform:capitalize"><?php esc_html_e('latest articles','space-exploration'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow zoomIn news-boxes owl-carousel","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"height":"200px","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:post-title {"isLink":true,"className":"news-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontFamily":"inter"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color"} /-->

<!-- wp:read-more {"content":"Read More","className":"news-btn","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"},"padding":{"top":"6px","bottom":"6px","left":"25px","right":"25px"}},"border":{"radius":"12px","width":"1px"}},"textColor":"text-color","borderColor":"text-color"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->