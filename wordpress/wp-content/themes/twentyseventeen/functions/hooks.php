<?php
/**
 * This action hook allows you to access data for a new user
 * immediately after they are added to the database.
 * The user id is passed to hook as an argument.
 */
add_action( 'user_register', 'myplugin_registration_save', 10, 1 );
function myplugin_registration_save( $user_id ) {
    $url = get_term_link( 'featured', 'genre' );
    if ( wp_redirect( $url ) ) {
        exit;
    }
}