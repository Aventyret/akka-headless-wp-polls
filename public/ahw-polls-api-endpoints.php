<?php
add_action( 'rest_api_init', function () {
  register_rest_route( AKKA_API_BASE, '/polls/(?P<post_id>[0-9]+)', array(
    'methods' => 'GET',
    'callback' => 'Akka_headless_wp_polls::get_poll',
    'permission_callback' => 'Akka_headless_wp_content::can_get_content',
  ) );
  register_rest_route( AKKA_API_BASE, '/polls/(?P<post_id>[0-9]+)', array(
    'methods' => 'GET',
    'callback' => 'Akka_headless_wp_polls::submit_poll',
    'permission_callback' => 'Akka_headless_wp_content::can_get_content',
  ) );
} );
