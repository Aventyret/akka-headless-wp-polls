<?php
use \Akka_headless_wp_utils as Utils;

class Akka_headless_wp_polls {
  public static function get_poll($data) {
    $post_id = Utils::getRouteParam($data, 'post_id');

    if (!$post_id) {
      return new WP_REST_Response(array('message' => 'Poll not found'), 404);
    }
  }

  public static function submit_poll($data) {
    $post_id = Utils::getRouteParam($data, 'post_id');
    $user_id = Utils::getRouteParam($data, 'user_id');
    $answer_id = Utils::getRouteParam($data, 'answer_id');

    if (!$post_id) {
      return new WP_REST_Response(array('message' => 'Poll not found'), 404);
    }
  }
}
