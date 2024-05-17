<?php

add_action("init", function () {
    register_post_type("poll", [
        "label" => esc_html__("Polls", "sage"),
        "has_archive" => false,
        "public" => false,
        "show_ui" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-chart-bar",
        "hierarchical" => false,
        "supports" => [
            "title",
            "revisions",
        ],
        "show_in_rest" => true,
        "menu_position" => 20,
        "labels" => [
            "name" => esc_html__("Polls", "sage"),
            "singular_name" => esc_html__("Poll", "sage"),
        ],
    ]);
});
