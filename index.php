<?php
 /*
 Plugin Name: Change Login
 Description: Change wp-login wordpress
 Version: 1.0.0
 Author:Bahman Nikouei
 Author URI: https://bahman.app
 Text Domain: Bahman.app
 */
 defined('ABSPATH') ||  exit('No Access...');

if( ! defined( 'BN_Change_WP_Admin_Login_Version' ) ) {
	define( 'BN_Change_WP_Admin_Login_Version', '1.0.0' );
}
if( ! defined( 'BN_Change_WP_Admin_Login_Name' ) ) {
	define( 'BN_Change_WP_Admin_Login_Name', 'تغییر آدرس ورود' );
}
if ( ! defined( 'BN_Change_WP_Admin_Login_Path' ) ) {
	define( 'BN_Change_WP_Admin_Login_Path', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'BN_Change_WP_Admin_Login_Base_Uri' ) ) {
	define( 'BN_Change_WP_Admin_Login_Base_Uri', plugin_dir_url( __FILE__ ) );
}
require_once BN_Change_WP_Admin_Login_Path . 'class-change-wp-admin-login.php';
