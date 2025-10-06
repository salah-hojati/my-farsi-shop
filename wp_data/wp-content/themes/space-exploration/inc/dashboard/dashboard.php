<?php

add_action( 'admin_menu', 'space_exploration_gettingstarted' );
function space_exploration_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'space-exploration'), esc_html__('Begin Installation', 'space-exploration'), 'edit_theme_options', 'space-exploration-guide-page', 'space_exploration_guide');
}

if ( ! defined( 'SPACE_EXPLORATION_SUPPORT' ) ) {
define('SPACE_EXPLORATION_SUPPORT',__('https://wordpress.org/support/theme/space-exploration/','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_REVIEW' ) ) {
define('SPACE_EXPLORATION_REVIEW',__('https://wordpress.org/support/theme/space-exploration/reviews/','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_LIVE_DEMO' ) ) {
define('SPACE_EXPLORATION_LIVE_DEMO',__('https://trial.ovationthemes.com/space-exploration/','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_BUY_PRO' ) ) {
define('SPACE_EXPLORATION_BUY_PRO',__('https://www.ovationthemes.com/products/space-wordpress-theme','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_PRO_DOC' ) ) {
define('SPACE_EXPLORATION_PRO_DOC',__('https://trial.ovationthemes.com/docs/space-exploration-pro-doc/','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_FREE_DOC' ) ) {
define('SPACE_EXPLORATION_FREE_DOC',__('https://trial.ovationthemes.com/docs/space-exploration-free-doc/','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_THEME_NAME' ) ) {
define('SPACE_EXPLORATION_THEME_NAME',__('Premium Space Exploration Theme','space-exploration'));
}
if ( ! defined( 'SPACE_EXPLORATION_BUNDLE_LINK' ) ) {
define('SPACE_EXPLORATION_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','space-exploration'));
}
/**
 * Theme Info Page
 */
function space_exploration_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'space-exploration'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( SPACE_EXPLORATION_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'space-exploration'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( SPACE_EXPLORATION_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'space-exploration'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( SPACE_EXPLORATION_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'space-exploration'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','space-exploration'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','space-exploration'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','space-exploration'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','space-exploration'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','space-exploration'); ?></h4>
					<p><?php esc_html_e('To check your website click here','space-exploration'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','space-exploration'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','space-exploration'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','space-exploration'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( SPACE_EXPLORATION_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','space-exploration'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(SPACE_EXPLORATION_THEME_NAME); ?></h3>
				<img class="space_exploration_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( SPACE_EXPLORATION_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'space-exploration'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( SPACE_EXPLORATION_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'space-exploration'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( SPACE_EXPLORATION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'space-exploration'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( SPACE_EXPLORATION_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('WordPress Theme Bundle (120+ Themes at Just $89)', 'space-exploration'); ?></a>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'space-exploration');?> </li>                 
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'space-exploration');?> </li>
					<li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'space-exploration');?> </li>
               <li class="upsell-space_exploration"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'space-exploration');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>