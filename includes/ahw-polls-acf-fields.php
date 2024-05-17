<?php
add_action("acf/init", function () {
  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group([
        "key" => "group_poll_question",
        "title" => "Poll question",
        "fields" => [
            [
                "key" => "field_poll_label",
                "label" => "Label",
                "name" => "poll_label",
                "type" => "text",
                "translations" => "translate",
            ],
            [
                "key" => "field_poll_question",
                "label" => "Question",
                "name" => "poll_question",
                "type" => "text",
                "translations" => "translate",
            ],
            [
                "key" => "field_poll_answers",
                "label" => "Answers",
                "name" => "poll_answers",
                "type" => "repeater",
                "layout" => "table",
                "button_label" => "Add answer",
                "rows_per_page" => 20,
                "sub_fields" => [
                    [
                      'key' => 'field_poll_answers_id',
                      'label' => 'Id',
                      'name' => 'id',
                      'type' => 'unique_id',
                      'translations' => 'copy_once',
                      'parent_repeater' => 'field_poll_answers',
                    ],
                    [
                      'key' => 'field_poll_answers_answer',
                      'label' => 'Answer',
                      'name' => 'answer',
                      'type' => 'text',
                      'translations' => 'translate',
                      'parent_repeater' => 'field_poll_answers',
                    ],
                ],
            ],
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "poll",
                ],
            ],
        ],
        "menu_order" => 0,
        "active" => true,
        "show_in_rest" => 0,
    ]);
  endif;
});
