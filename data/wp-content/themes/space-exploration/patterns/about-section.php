<?php
/**
 * Title: About Section
 * Slug: space-exploration/about-section
 * Categories: space-exploration, about-section
 */
?>
<!-- wp:group {"className":"about-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"14px"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group about-section has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--70);padding-right:0px;padding-bottom:var(--wp--preset--spacing--70);padding-left:0px;font-size:14px"><!-- wp:group {"className":"head-box wow fadeInDown","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow fadeInDown" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","className":"sec-sub-heading","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"textColor":"text-color","fontFamily":"inter"} -->
<p class="has-text-align-center sec-sub-heading has-text-color-color has-text-color has-link-color has-inter-font-family" style="margin-top:16px;margin-bottom:16px;font-size:18px;font-style:normal;font-weight:400;text-transform:capitalize"><?php esc_html_e('who we are','space-exploration'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","textTransform":"capitalize"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}}},"textColor":"text-color","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color-color has-text-color has-link-color has-inter-font-family" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:30px;text-transform:capitalize"><?php esc_html_e('we are the astronomy community.','space-exploration'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"about-cols wow fadeInUp"} -->
<div class="wp-block-columns about-cols wow fadeInUp"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"about-img-box-inner","style":{"spacing":{"padding":{"right":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group about-img-box-inner" style="padding-right:0px"><!-- wp:image {"id":30,"width":"auto","height":"300px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px","width":"1px"}},"borderColor":"white"} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/about.png'); ?>" alt="" class="has-border-color has-white-border-color wp-image-30" style="border-width:1px;border-radius:10px;width:auto;height:300px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"abt-exp-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"10px","width":"1px"}},"backgroundColor":"secondary","borderColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group abt-exp-box has-border-color has-white-border-color has-secondary-background-color has-background" style="border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:26px;font-style:normal;font-weight:600"><?php esc_html_e('15 +','space-exploration'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e('years of','space-exploration'); ?><br><?php esc_html_e('experience','space-exploration'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"about-text-box","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center about-text-box" style="padding-left:0"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"80px"}},"typography":{"lineHeight":"2","fontSize":"20px","fontStyle":"normal","fontWeight":"400"}},"textColor":"text-color","fontFamily":"inter"} -->
<p class="has-text-align-right has-text-color-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-bottom:0;margin-left:80px;font-size:20px;font-style:normal;font-weight:400;line-height:2"><?php esc_html_e('We are a mission-driven consulting firm, guiding businesses to reach new frontiers of growth. With expertise in business strategy, financial planning, and risk management, we help organizations navigate the vast universe of opportunities and achieve sustainable success. Our team serves as your co-pilot, charting the right trajectory for long-term impact. Together, we fuel innovation, break through barriers, and help your business shine among the stars.','space-exploration'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->