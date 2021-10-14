<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => '', '_controller' => 'App\\Controller\\Controller::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\Controller::contact'], null, null, null, false, false, null]],
        '/prestations' => [[['_route' => 'prestations', '_controller' => 'App\\Controller\\PrestationsController::index'], null, null, null, false, false, null]],
        '/prestations/12' => [[['_route' => 'prestations_show', '_controller' => 'App\\Controller\\PrestationsController::show'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
