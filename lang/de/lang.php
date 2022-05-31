<?php

return [
    'plugin' => [
        'name' => 'Benutzerprofil',
        'description' => 'Fügen Sie Benuterprofilfelder für Frontend-Benutzer hinzu.',
    ],

    'settings' => [
        'menu_label' => 'Benutzerprofil',
        'menu_description' => 'Benutzerprofilfelder verwalten.',
        'form' => 'Benuterprofilfelder',
        'form_comment' => 'Verwenden Sie diesen Abschnitt um zusätzliche Benutzerfelder hinzuzufügen.'
    ],

    'fields' => [
        'repeater_prompt' => 'Ein neues Profilfeld hinzufügen',
        'name' => 'Name',
        'name_comment' => 'Wird als Bezeichnung für das Feld verwendet.',
        'type' => 'Typ',
        'label' => 'Beschriftung',
        'label_comment' => 'Wird als Beschriftung des Felds dargestellt.',
        'tab' => 'Tab',
        'tab_comment' => 'Der Benutzerkonto-Tab zu wessen das Feld gehört (nur visuell).',
        'tab_default' => 'Versch.',
        'span' => 'Orientierung',
        'comment' => 'Kommentar',
        'required' => 'Erforderlich',
        'required_comment' => 'Dieses Feld muss ausgefüllt werden.',
        'span_auto' => 'Auto',
        'span_left' => 'Links',
        'span_right' => 'Rechts',
        'span_full' => 'Voll',
    ]
];
