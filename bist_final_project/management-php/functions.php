<?php
function Image_url() {
    $type     = explode( '.', $_FILES['su_image']['name'] );
    $type     = $type[count( $type ) - 1];
    $file_url = './upload/' . uniqid( rand() ) . '.' . $type;
    if ( in_array( $type, ['jpg', 'JPG', 'PNG', 'png'] ) ) {
        if ( is_uploaded_file( $_FILES['su_image']['tmp_name'] ) )
        {
            if ( move_uploaded_file( $_FILES['su_image']['tmp_name'], $file_url ) ) {
                return $file_url;
            }
        }
    } else {
        echo 'sorry does not match my extension';
    }
};
/**
 * SignUp Function
 */
function signup_fun() {
    if ( isset( $_POST['su_submit'] ) ) {
        $su_name     = $_POST['su_name'];
        $su_email    = $_POST['su_email'];
        $su_pass     = $_POST['su_pass'];
        $su_rep_pass = $_POST['su_rep_pass'];
        $su_image    = Image_url();
        $su_checkbox = $_POST['su_checkbox'];
        if ( $su_pass === $su_rep_pass ) {
            echo $su_pass = md5( $su_rep_pass );
        } else {
            echo 'Password Not Match';
        }
    }
}

/**
 * SignIn Function
 */