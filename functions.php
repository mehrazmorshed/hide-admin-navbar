<?php

function hide_admin_navbar_load_textdomain() {

    load_plugin_textdomain( 'hide-admin-navbar', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function hide_admin_navbar_main() {

    return false;
}

function hide_admin_navbar_activation_hook() {

    set_transient( 'hide-admin-navbar-notification', true, 5 );
}

function hide_admin_navbar_activation_notification() {

    if( get_transient( 'hide-admin-navbar-notification' ) ) {

        ?>
        <div class="updated notice is-dismissible">
            <p>
                <?php esc_attr_e( 'Thank you for installing Hide Admin Navbar!', 'hide-admin-navbar' ); ?>
            </p>
        </div>
        <?php
        delete_transient( 'hide-admin-navbar-notification' );
    }
}

function custom_admin_notice() {
    // Check if the notice has been dismissed
    if (get_option('custom_plugin_notice_dismissed')) {
        return;
    }

    ?>
    <div class="notice notice-info is-dismissible" id="custom-plugin-notice">
        <p><b>The future belongs to those who believe in the beauty of their dreams! 🎉 May all your dreams come true in 2024!</b></p>
    </div>
    <script>
        jQuery(document).on('click', '#custom-plugin-notice .notice-dismiss', function() {
            // Store the dismissal state in the database
            jQuery.post(ajaxurl, {
                action: 'dismiss_custom_plugin_notice'
            });
        });
    </script>
    <?php
}

function dismiss_custom_plugin_notice() {
    update_option('custom_plugin_notice_dismissed', true);
    wp_die();
}

