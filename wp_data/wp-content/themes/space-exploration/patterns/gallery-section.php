<?php
/**
 * Title: Gallery Section
 * Slug: space-exploration/gallery-section
 * Categories: space-exploration, gallery-section
 */
?>
<!-- wp:group {"className":"gallery-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"35px","left":"0px","right":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group gallery-section has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:35px;padding-left:0px"><!-- wp:group {"className":"gallery-head-box wow zoomInUp","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"20%"}} -->
<div class="wp-block-group gallery-head-box wow zoomInUp" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","className":"gallery-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"}},"textColor":"text-color","fontFamily":"inter"} -->
<p class="has-text-align-center gallery-sub-title has-text-color-color has-text-color has-link-color has-inter-font-family" style="font-size:18px;font-style:normal;font-weight:400;text-transform:capitalize"><?php esc_html_e('our gallery','space-exploration'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"gallery-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-color"}}},"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"},"spacing":{"margin":{"top":"15px"}}},"textColor":"text-color","fontFamily":"inter"} -->
<h3 class="wp-block-heading has-text-align-center gallery-title has-text-color-color has-text-color has-link-color has-inter-font-family" style="margin-top:15px;font-size:28px;font-style:normal;font-weight:700;line-height:1.4;text-transform:capitalize"><?php esc_html_e('deep space through our lens','space-exploration'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gallery-content","layout":{"type":"default"}} -->
<div class="wp-block-group gallery-content"><!-- wp:gallery {"columns":5,"linkTo":"none","className":"gallery-box","style":{"spacing":{"blockGap":{"left":"35px"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-5 is-cropped gallery-box"><!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none","className":"gallery-img wow rollIn","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-large has-custom-border gallery-img wow rollIn"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/img1.png'); ?>" alt="" class="wp-image-31" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":32,"sizeSlug":"large","linkDestination":"none","className":"gallery-img wow rollIn","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-large has-custom-border gallery-img wow rollIn"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/img2.png'); ?>" alt="" class="wp-image-32" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":33,"sizeSlug":"large","linkDestination":"none","className":"gallery-img wow rollIn","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-large has-custom-border gallery-img wow rollIn"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/img3.png'); ?>" alt="" class="wp-image-33" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":34,"sizeSlug":"large","linkDestination":"none","className":"gallery-img wow rollIn","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-large has-custom-border gallery-img wow rollIn"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/img4.png'); ?>" alt="" class="wp-image-34" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":35,"sizeSlug":"large","linkDestination":"none","className":"gallery-img wow rollIn","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-large has-custom-border gallery-img wow rollIn"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/img5.png'); ?>" alt="" class="wp-image-35" style="border-radius:20px"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->