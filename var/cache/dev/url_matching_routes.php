<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_gestor_tienda', '_controller' => 'App\\Controller\\GestorTiendaController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\GestorTiendaController::login'], null, null, null, false, false, null]],
        '/registrer' => [[['_route' => 'app_registro', '_controller' => 'App\\Controller\\GestorTiendaController::singup'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\GestorTiendaController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/nuevoArticulo' => [[['_route' => 'app_nuevo_articulo', '_controller' => 'App\\Controller\\GestorTiendaController::nuevoArticulo'], null, null, null, false, false, null]],
        '/procesaNuevoArticulo' => [[['_route' => 'app_procesa_nuevo_articulo', '_controller' => 'App\\Controller\\GestorTiendaController::procesaNuevoArticulo'], null, null, null, false, false, null]],
        '/catalogo' => [[['_route' => 'app_catalogo', '_controller' => 'App\\Controller\\GestorTiendaController::catalogo'], null, null, null, false, false, null]],
        '/procesarCompra' => [[['_route' => 'app_procesar_compra', '_controller' => 'App\\Controller\\GestorTiendaController::procesarCompra'], null, null, null, false, false, null]],
        '/verTicket' => [[['_route' => 'app_ver_ticket', '_controller' => 'App\\Controller\\GestorTiendaController::verTicket'], null, null, null, false, false, null]],
        '/verTicketDevuelto' => [[['_route' => 'app_ver_ticket_devuelto', '_controller' => 'App\\Controller\\GestorTiendaController::verTicketDevuelto'], null, null, null, false, false, null]],
        '/verTicketPorId' => [[['_route' => 'app_ver_ticket_id', '_controller' => 'App\\Controller\\GestorTiendaController::verTicketPorId'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock', '_controller' => 'App\\Controller\\GestorTiendaController::stock'], null, null, null, false, false, null]],
        '/añadirStock' => [[['_route' => 'app_añadir_stock', '_controller' => 'App\\Controller\\GestorTiendaController::añadirStock'], null, null, null, false, false, null]],
        '/getArticulo' => [[['_route' => 'app_get_articulo', '_controller' => 'App\\Controller\\GestorTiendaController::getArticulo'], null, null, null, false, false, null]],
        '/editar' => [[['_route' => 'app_editar', '_controller' => 'App\\Controller\\GestorTiendaController::editar'], null, null, null, false, false, null]],
        '/editarArticulo' => [[['_route' => 'app_editar_articulo', '_controller' => 'App\\Controller\\GestorTiendaController::editarArticulo'], null, null, null, false, false, null]],
        '/buscarTickets' => [[['_route' => 'app_buscar_tickets', '_controller' => 'App\\Controller\\GestorTiendaController::buscarTickets'], null, null, null, false, false, null]],
        '/getTicketBy' => [[['_route' => 'app_get_ticketBy', '_controller' => 'App\\Controller\\GestorTiendaController::getTicketBy'], null, null, null, false, false, null]],
        '/getTickets' => [[['_route' => 'app_get_tickets', '_controller' => 'App\\Controller\\GestorTiendaController::getTickets'], null, null, null, false, false, null]],
        '/getDatosVentas' => [[['_route' => 'app_get_datos_ventas', '_controller' => 'App\\Controller\\GestorTiendaController::getDatosVentas'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\GestorTiendaController::darshboard'], null, null, null, false, false, null]],
        '/getTicketDevolucion' => [[['_route' => 'app_get_ticket_devolucion', '_controller' => 'App\\Controller\\GestorTiendaController::getTicketDevolucion'], null, null, null, false, false, null]],
        '/procesaDevolucion' => [[['_route' => 'app_procesa_devolucion', '_controller' => 'App\\Controller\\GestorTiendaController::procesarDevolucion'], null, null, null, false, false, null]],
        '/cambioPass' => [[['_route' => 'app_cambio_pass', '_controller' => 'App\\Controller\\GestorTiendaController::cambioPass'], null, null, null, false, false, null]],
        '/procesaCambioPass' => [[['_route' => 'app_procesa_cambio_pass', '_controller' => 'App\\Controller\\GestorTiendaController::procesaCambioPass'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
