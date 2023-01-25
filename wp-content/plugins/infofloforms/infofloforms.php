<?php
/*
Plugin Name: Infoflo Forms
Description: A plugin that displays a list of Gravity Forms on the website
*/
function infofloforms_shortcode($atts) {
    $forms = GFAPI::get_forms();

    // Check if there are any forms
    if ( ! empty( $forms ) ) {
        $output = '<ul>';
        // Loop through the forms
        foreach ( $forms as $form ) {
            $output .= '<li><a href="' . admin_url( 'admin.php?page=gf_edit_forms&id=' . $form['id'] ) . '">' . $form['title'] . '</a></li>';
        }
        $output .= '</ul>';
    } else {
        $output = 'No forms found.';
    }

    return $output;
}
add_shortcode( 'infofloforms', 'infofloforms_shortcode' );