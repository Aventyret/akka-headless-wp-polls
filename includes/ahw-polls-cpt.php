<?php

add_action("init", function () {
    register_post_type("app", [
        "label" => esc_html__("Polls", "sage"),
        "has_archive" => false,
        "public" => true,
        "show_ui" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-comment",
        "hierarchical" => false,
        "supports" => [
            "title",
            "author",
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
