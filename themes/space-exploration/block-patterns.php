<?php
/**
 * Space Exploration: Block Patterns
 *
 * @since Space Exploration 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Space Exploration 1.0
 *
 * @return void
 */
function space_exploration_register_block_patterns() {
	$space_exploration_block_pattern_categories = array(
		'space-exploration'    => array( 'label' => __( 'Space Exploration', 'space-exploration' ) ),
	);

	$space_exploration_block_pattern_categories = apply_filters( 'space_exploration_block_pattern_categories', $space_exploration_block_pattern_categories );

	foreach ( $space_exploration_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'space_exploration_register_block_patterns', 9 );
