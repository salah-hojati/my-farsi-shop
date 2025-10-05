<?php 

function space_exploration_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'space-exploration-theme-settings', // Menu slug
        'space_exploration_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'space_exploration_add_admin_menu' );

function space_exploration_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'space-exploration' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'space_exploration_settings_group' );
            do_settings_sections( 'space-exploration-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function space_exploration_register_settings() {
    register_setting( 'space_exploration_settings_group', 'space_exploration_enable_animations' );

    add_settings_section(
        'space_exploration_settings_section',
        __( 'Animation Settings', 'space-exploration' ),
        null,
        'space-exploration-theme-settings'
    );

    add_settings_field(
        'space_exploration_enable_animations',
        __( 'Enable Animations', 'space-exploration' ),
        'space_exploration_enable_animations_callback',
        'space-exploration-theme-settings',
        'space_exploration_settings_section'
    );
}
add_action( 'admin_init', 'space_exploration_register_settings' );

function space_exploration_enable_animations_callback() {
    $checked = get_option( 'space_exploration_enable_animations', true );
    ?>
    <input type="checkbox" name="space_exploration_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

