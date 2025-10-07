<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function space_exploration_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'space-exploration' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	space_exploration_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'space_exploration_register_recommended_plugins' );