<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '' => [[], ['_controller' => 'App\\Controller\\Controller::index'], [], [['text', '/']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\Controller::contact'], [], [['text', '/contact']], [], []],
    'prestations' => [[], ['_controller' => 'App\\Controller\\Controller::prestations'], [], [['text', '/prestations']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
