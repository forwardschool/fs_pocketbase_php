<?php

    session_start();

    define( "POCKETBASE_URL", "https://nathanonn-special-telegram-7r64v976jq2xxq7-8090.preview.app.github.dev" );

    require 'includes/functions.php';

    // get route
    $path = trim( $_SERVER['REQUEST_URI'], '/' ); // remove starting and ending slashes

    // remove query string
    $path = parse_url( $path, PHP_URL_PATH );

    if ( isset( $path ) ) {
        switch( $path ) {
            case 'addnew':
                require 'pages/addnew.php';
                break;
            case 'login':
                require 'pages/login.php';
                break;
            case 'signup':
                require 'pages/signup.php';
                break;
            case 'logout':
                require 'pages/logout.php';
                break;
            default:
                require 'pages/dashboard.php';
                break;
        }
    } else {
        require 'pages/dashboard.php';
    }