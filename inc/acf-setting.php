<?php

/**
 * ACF PRO Setting
 */

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

        acf_add_options_sub_page(array(
          'page_title' 	=> 'Home page',
          'menu_title'	=> 'Home page',
          'parent_slug'	=> 'theme-general-settings',
        ));
    }
}