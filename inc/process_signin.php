<?php
    include_once '../common.php';

    // Validate form

    if ( empty( $_POST['email'] || empty( $_POST['pass'] ) ) ) {
        $status = 'fail';
        $message = 'All fields must be filled in.';
    } 
    else { // allFieldsFilledIn

        $userInfo = getUserWithEmailAddress( trim( $_POST['email'] ) );

        if ( empty( $userInfo ) ) {
            $status = 'fail';
            $message = 'Invalid Email or password';
        } elseif ( !password_verify( $_POST['pass'], $userInfo['pass'] ) ) { // validate password
            $status = 'fail';
            $message = 'Invalid Email or Password';
        } else { // all passes
            $status = 'ok';
            $message = '';

            // save info to php session
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_info'] = $userInfo;
        }

    }

    echo json_encode(
        array(
            'status' => $status,
            'message' => $message
        )
    );

