<?php
class Akka_headless_wp_polls_db {
  public static function setup_answers_table() {
    global $wpdb;

    $table_name = self::meta_table_name();

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

      $charset_collate = $wpdb->get_charset_collate();

      $sql = "CREATE TABLE $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        post_id bigint(20) NOT NULL,
        user_id varchar(36) NOT NULL,
        answer_id bigint(20) NOT NULL,
        PRIMARY KEY  (id)
      ) $charset_collate;";

      require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
      dbDelta( $sql );

      add_option( 'pf_sso_version', PF_SSO_VER );
    }
  }

  public static function answers_table_name() {
    global $wpdb;
    return $wpdb->prefix . 'akka_polls_answers';
  }

  public static function get_answers($post_id, $user_id) {
    global $wpdb;
  }

  public static function answers_table_name($post_id, $user_id, $answer_id) {
    global $wpdb;
  }
}
