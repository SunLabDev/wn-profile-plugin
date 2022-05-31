<?php

return [
    'plugin' => [
        'name' => 'Profile',
        'description' => 'Add user profile fields to front-end users.',
    ],

    'settings' => [
        'menu_label' => 'User profile',
        'menu_description' => 'Manage user profile fields.'
    ],

    'fields' => [
        'repeater_prompt' => 'Add a new profile field',
        'name' => 'Name',
        'name_comment' => 'Used as the identifier of the field.',
        'type' => 'Type',
        'label' => 'Label',
        'label_comment' => 'Displayed as the label of the field.',
        'tab' => 'Tab',
        'tab_comment' => 'The user account tab where the field belongs to (just visual).',
        'tab_default' => 'Misc',
        'span' => 'Span',
        'comment' => 'Comment',
        'required' => 'Required',
        'required_comment' => 'The field must be filled.',
        'span_auto' => 'Auto',
        'span_left' => 'Left',
        'span_right' => 'Right',
        'span_full' => 'Full',
    ]
];
