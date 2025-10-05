<?php
/**
 * Space Exploration: Customizer
 *
 * @subpackage Space Exploration
 * @since 1.0
 */

function space_exploration_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('space_exploration_pro', array(
        'title'    => __('SPACE EXPLORATION PREMIUM', 'space-exploration'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('space_exploration_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Space_Exploration_Pro_Control($wp_customize, 'space_exploration_pro', array(
        'label'    => __('SPACE EXPLORATION PREMIUM', 'space-exploration'),
        'section'  => 'space_exploration_pro',
        'settings' => 'space_exploration_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'space_exploration_customize_register' );


define('SPACE_EXPLORATION_PRO_LINK',__('https://www.ovationthemes.com/products/space-wordpress-theme','space-exploration'));

define('SPACE_EXPLORATION_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','space-exploration'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Space_Exploration_Pro_Control')):
    class Space_Exploration_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( SPACE_EXPLORATION_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE SPACE EXPLORATION PREMIUM','space-exploration');?> </a>
	        </div>
            <div class="col-md">
                <img class="space_exploration_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( SPACE_EXPLORATION_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('WP Theme Bundle (120+ Themes)','space-exploration');?> </a>
            </div>
        </label>
    <?php } }
endif;