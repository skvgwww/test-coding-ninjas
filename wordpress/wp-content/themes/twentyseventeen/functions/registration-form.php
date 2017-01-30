<?php

//1. Add a new form element...
add_action( 'register_form', 'myplugin_register_form' );
function myplugin_register_form() {

    $skype = ( ! empty( $_POST['skype'] ) ) ? trim( $_POST['skype'] ) : '';

    ?>
    <p>
        <label for="skype"><?php _e( 'Skype', 'mydomain' ) ?><br />
            <input type="text" name="skype" id="skype" class="input" value="<?php echo esc_attr( wp_unslash( $skype ) ); ?>" size="25" /></label>
    </p>
    <?php
}

//2. Add validation. In this case, we make sure skype is required.
add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {

    if ( empty( $_POST['skype'] ) || ! empty( $_POST['skype'] ) && trim( $_POST['skype'] ) == '' ) {
        $errors->add( 'skype_error', __( '<strong>ERROR</strong>: You must include a skype.', 'mydomain' ) );
    }

    return $errors;
}

//3. Finally, save our extra registration user meta.
add_action( 'user_register', 'myplugin_user_register' );
function myplugin_user_register( $user_id ) {
    if ( ! empty( $_POST['skype'] ) ) {
        update_user_meta( $user_id, 'skype', trim( $_POST['skype'] ) );
    }
}
