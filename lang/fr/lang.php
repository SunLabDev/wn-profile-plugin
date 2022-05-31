<?php

return [
    'plugin' => [
        'name' => 'Profil',
        'description' => 'Ajoutez des champs supplémentaire aux utilisateurs front-end.',
    ],

    'settings' => [
        'menu_label' => 'Profil',
        'menu_description' => 'Gérer les champs supplémentaires.'
    ],

    'fields' => [
        'repeater_prompt' => 'Ajouter un champs supplémentaire.',
        'name' => 'Nom',
        'name_comment' => 'Utilisé comme identifiant du champs.',
        'type' => 'Type',
        'label' => 'Label',
        'label_comment' => 'Affiché sur le formulaire backend.',
        'tab' => 'Tab',
        'tab_comment' => "L'onglet dans lequel sera affiché ce champs (purement visuel).",
        'tab_default' => 'Divers',
        'span' => 'Span',
        'comment' => 'Commentaire',
        'required' => 'Requis',
        'required_comment' => 'Ce champs est obligatoire.',
        'span_auto' => 'Auto',
        'span_left' => 'Gauche',
        'span_right' => 'Droite',
        'span_full' => 'Largeur totale',
    ]
];
