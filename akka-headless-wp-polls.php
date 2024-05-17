<?php
/*
Plugin Name: Akka Headless WP – Polls
Plugin URI: https://github.com/aventyret/akka-wp/blob/main/plugins/akka-headless-wp-polls
Description: Polls plugin for Akka
Author: Mediakooperativet, Äventyret
Author URI: https://aventyret.com
Version: 0.0.1
*/

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)){
    die('Invalid URL');
}

if (defined('AKKA_HEADLESS_WP_POLLS'))
{
    die('Invalid plugin access');
}

define('AKKA_HEADLESS_WP_POLLS',  __FILE__ );
define('AKKA_HEADLESS_WP_POLLS_DIR', plugin_dir_path( __FILE__ ));
define('AKKA_HEADLESS_WP_POLLS_VER', "0.0.1");

require_once(AKKA_HEADLESS_WP_DIR . 'includes/ahw-polls.php');
require_once(AKKA_HEADLESS_WP_DIR . 'includes/ahw-polls-cpt.php');
require_once(AKKA_HEADLESS_WP_DIR . 'includes/ahw-polls-acf-fields.php');
require_once(AKKA_HEADLESS_WP_DIR . 'public/ahw-polls-api-endpoints.php');

if (is_admin())
{
    register_activation_hook( AKKA_HEADLESS_WP_POLLS, 'Akka_headless_wp_polls_db::setup_answers_table' );
}
