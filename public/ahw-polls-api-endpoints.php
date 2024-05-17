<?php
add_action( 'rest_api_init', function () {
  register_rest_route( AKKA_API_BASE, '/polls/(?P<post_id>[0-9]+)', array(
    'methods' => 'GET', // TODO: change to POST?
    'callback' => 'Akka_headless_wp_polls::get_poll_with_answers',
    'permission_callback' => 'Akka_headless_wp_content::can_get_content',
  ) );
  register_rest_route( AKKA_API_BASE, '/polls/(?P<post_id>[0-9]+)', array(
    'methods' => 'POST',
    'callback' => 'Akka_headless_wp_polls::submit_poll_answer',
    'permission_callback' => 'Akka_headless_wp_content::can_get_content',
  ) );
} );
