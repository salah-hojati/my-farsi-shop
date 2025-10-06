<?php
/**
 * Title: Banner
 * Slug: space-exploration/banner
 * Categories: space-exploration, banner
 */
?>
<!-- wp:group {"className":"banner-section","style":{"dimensions":{"minHeight":"550px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group banner-section has-primary-background-color has-background" style="min-height:550px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner-bg.png'); ?>","id":7,"dimRatio":50,"customOverlayColor":"#1e1830","isUserOverlayColor":false,"minHeight":800,"sizeSlug":"large","className":"banner-bg","layout":{"type":"constrained","contentSize":"35%"}} -->
<div class="wp-block-cover banner-bg" style="min-height:800px"><img class="wp-block-cover__image-background wp-image-7 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner-bg.png'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#1e1830"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"banner-content wow flipInX","layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-content wow flipInX"><!-- wp:heading {"textAlign":"center","className":"banner-title","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center banner-title has-text-color-color has-text-color has-link-color has-inter-font-family" style="font-size:42px;font-style:normal;font-weight:800;text-transform:capitalize"><?php esc_html_e('exploring the stargazing, one star at a time','space-exploration'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"spacing":{"margin":{"top":"12px","bottom":"35px"}}},"textColor":"text-color","fontFamily":"inter"} -->
<p class="has-text-align-center has-text-color-color has-text-color has-link-color has-inter-font-family" style="margin-top:12px;margin-bottom:35px;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','space-exploration'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"text-color","style":{"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"border":{"radius":"10px"},"spacing":{"padding":{"left":"25px","right":"25px","top":"10px","bottom":"10px"}}},"fontFamily":"inter"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color-color has-secondary-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:10px;padding-top:10px;padding-right:25px;padding-bottom:10px;padding-left:25px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('get started','space-exploration'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->