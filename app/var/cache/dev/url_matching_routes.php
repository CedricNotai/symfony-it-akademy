<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/exo/alphabet' => [[['_route' => 'alphabet', '_controller' => 'App\\Controller\\ExoController::tableauAlphabet'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\QuoteController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/exo/(?'
                    .'|candidat/(?'
                        .'|([^/]++)(*:70)'
                        .'|numero/(\\d+)(*:89)'
                    .')'
                    .'|loto/([^/]++)/([^/]++)(*:119)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'exo', '_controller' => 'App\\Controller\\ExoController::index'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        89 => [[['_route' => 'get_numero_secu_sociale', '_controller' => 'App\\Controller\\ExoController::getNumeroSecuriteSociale'], ['numeroSecuriteSociale'], ['GET' => 0], null, false, true, null]],
        119 => [
            [['_route' => 'loto', '_controller' => 'App\\Controller\\ExoController::loto'], ['min', 'max'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
