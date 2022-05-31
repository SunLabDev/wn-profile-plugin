<?php

return [
    'plugin' => [
        'name' => 'Perfil d\'Usuària',
        'description' => 'Afegiu camps de perfil a les usuàries públiques.',
    ],

    'settings' => [
        'menu_label' => 'Perfil d\'Usuària',
        'menu_description' => 'Gestioneu els camps del perfil.'
    ],

    'fields' => [
        'repeater_prompt' => 'Afegeix un camp de perfil',
        'name' => 'Nom',
        'name_comment' => 'S\'usa com a identificador del camp.',
        'type' => 'Tipus',
        'label' => 'Etiqueta',
        'label_comment' => 'Es mostra com a etiqueta del camp.',
        'tab' => 'Pestanya',
        'tab_comment' => 'A quina pestanya del compte de la usuària s\'ha de mostrar el camp.',
        'tab_default' => 'Misc',
        'span' => 'Span',
        'comment' => 'Comentari',
        'required' => 'Obligatori',
        'required_comment' => 'El camp s\'ha d\'emplenar.',
        'span_auto' => 'Automàtic',
        'span_left' => 'Esquerra',
        'span_right' => 'Dreta',
        'span_full' => 'Tot',
    ]
];
