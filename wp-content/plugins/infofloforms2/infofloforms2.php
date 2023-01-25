<?php
/*
Plugin Name: Infoflo Forms 2
Description: A Form Display All Entries of a Form
*/
function infofloforms2_shortcode($atts) {
    $a = shortcode_atts( array(
        'form_id' => '',
    ), $atts );
    $entries = GFAPI::get_entries($a['form_id']);
    if ( ! empty( $entries ) ) {
        echo '<ul>';
        foreach ( $entries as $entry ) {
          echo '<li>' . $entry['date_created'] . ' - ' . $entry['1'] . '</li>';
        }
        echo '</ul>';
      } else {
        echo 'No entries found for this form.';
      }
    // code to display the form entries goes here
}
add_shortcode( 'infofloforms2', 'infofloforms2_shortcode' );