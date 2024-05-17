<?php
use \Akka_headless_wp_utils as Utils;
use \Akka_headless_wp_resolvers as Reslolvers;

class Akka_headless_wp_polls {
  public static function get_poll_with_answers($data) {
    $post_id = Utils::getRouteParam($data, 'post_id');
    $user_id = Utils::getRouteParam($data, 'user_id');

    if (!$post_id) {
      return new WP_REST_Response(array('message' => 'Post id missing'), 400);
    }

    if (!$user_id) {
      return new WP_REST_Response(array('message' => 'User missing'), 400);
    }

    $post = get_post($post_id);
    if (!$post || $post->post_type != "poll") {
      return new WP_REST_Response(array('message' => 'Poll not found'), 404);
    }
    $post_fields = get_fields($post->ID);
    $poll = [
      "label" => Reslolvers::resolve_field($post_fields, "poll_label"),
      "question" => Reslolvers::resolve_field($post_fields, "poll_question"),
      "answers" => Reslolvers::resolve_field($post_fields, "poll_answers"),
    ];

    // TODO: get answer stats if user did answer

    return $poll;
  }

  public static function submit_poll_answer($data) {
    $post_id = Utils::getRouteParam($data, 'post_id');
    $user_id = Utils::getRouteParam($data, 'user_id');
    $answer_id = Utils::getRouteParam($data, 'answer_id');

    if (!$post_id) {
      return new WP_REST_Response(array('message' => 'Post id missing'), 400);
    }

    if (!$user_id) {
      return new WP_REST_Response(array('message' => 'User missing'), 400);
    }

    if (!$answer_id) {
      return new WP_REST_Response(array('message' => 'Answer missing'), 400);
    }

    $post = get_post($post_id);
    if (!$post || $post->post_type != "poll") {
      return new WP_REST_Response(array('message' => 'Poll not found'), 404);
    }

    // TODO: Save user answer
    // TODO: Return poll with answers
  }
}
