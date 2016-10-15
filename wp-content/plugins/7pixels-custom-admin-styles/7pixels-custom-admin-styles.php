<?php
/*
Plugin Name: 7pixels Custom Admin Styles
Plugin URI: http://.7pixelsgh.com
Description: Custom CSS styles for admin interface.
Author: Laud Tetteh
Version: 0.1
Author URI: http://laud.7pixelsgh.com
*/


//Customize the “Howdy” Message in Admin Bar (http://www.hongkiat.com/blog/wordpress-howdy-customized/)
function public_holiday() {
    $date = date('d-m');
    switch($date) {
        case '01-01':
            $message = 'Happy New Years';
        break;

        case '25-12':
            $message = 'Merry Christmas';
        break;

        default:
            $message = 'Akwaaba';
    }
    return $message;
}

function howdy_message($translated_text, $text, $domain) {
    $message = public_holiday();
    $new_message = str_replace('Howdy', $message, $text);
    return $new_message;
}
add_filter('gettext', 'howdy_message', 10, 3);

//changes the admin bar logo in top left corner
function no_wp_logo_admin_bar_remove() {
    ?>
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                content: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin-bar-logo.png)!important;/*size: 20x20 pixels*/
                top: 2px;
            }

            #wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
                pointer-events: none;
                cursor: default;
            }
        </style>
    <?php
}
add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);


//this portion changes the login logo url title and url path and login page background (https://premium.wpmudev.org/blog/customize-login-page/0)
function my_login_logo() {
    ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login-logo.png)!important;/*size: 150x150 pixels*/
            }
        </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_background() {
    ?>
        <style type="text/css">
            body.login {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login-back.png)!important;/*size: 1500 x 1140 pixels*/
                min-width: 100%;
                min-height: 100%;
                background-size: cover;
            }
        </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'my_login_background' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return '';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
