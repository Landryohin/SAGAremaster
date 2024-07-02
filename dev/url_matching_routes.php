<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/Affectations' => [[['_route' => 'app_Affectations_index', '_controller' => 'App\\Controller\\AffectationsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/directions' => [[['_route' => 'app_directions_index', '_controller' => 'App\\Controller\\DirectionsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/directions/new' => [[['_route' => 'app_directions_new', '_controller' => 'App\\Controller\\DirectionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/divisions' => [[['_route' => 'app_divisions_index', '_controller' => 'App\\Controller\\DivisionsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/divisions/new' => [[['_route' => 'app_divisions_new', '_controller' => 'App\\Controller\\DivisionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documents' => [[['_route' => 'app_documents_index', '_controller' => 'App\\Controller\\DocumentsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/documents/new' => [[['_route' => 'app_documents_new', '_controller' => 'App\\Controller\\DocumentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documents/attache' => [[['_route' => 'app_documents_attache', '_controller' => 'App\\Controller\\DocumentsController::attachement'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'Accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/initialised/data' => [[['_route' => 'app_initialised_data', '_controller' => 'App\\Controller\\InitialisedDataController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/password' => [[['_route' => 'changePassword', '_controller' => 'App\\Controller\\PasswordController::index'], null, null, null, false, false, null]],
        '/admin/postes' => [[['_route' => 'app_postes_index', '_controller' => 'App\\Controller\\PostesController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/postes/new' => [[['_route' => 'app_postes_new', '_controller' => 'App\\Controller\\PostesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/secretariats' => [[['_route' => 'app_secretariats_index', '_controller' => 'App\\Controller\\SecretariatsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/secretariats/new' => [[['_route' => 'app_secretariats_new', '_controller' => 'App\\Controller\\SecretariatsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/poste' => [[['_route' => 'poste', '_controller' => 'App\\Controller\\SecurityController::poste'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/services' => [[['_route' => 'app_services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/services/new' => [[['_route' => 'app_services_new', '_controller' => 'App\\Controller\\ServicesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/smq' => [[['_route' => 'app_smq', '_controller' => 'App\\Controller\\SmqController::index'], null, null, null, false, false, null]],
        '/statistiques' => [[['_route' => 'app_statistiques_index', '_controller' => 'App\\Controller\\StatistiquesController::index'], null, null, null, false, false, null]],
        '/statistiques/DGR' => [[['_route' => 'app_statistiques_DGR', '_controller' => 'App\\Controller\\StatistiquesController::indexDGR'], null, null, null, false, false, null]],
        '/statistiques/DCGA' => [[['_route' => 'app_statistiques_DGCA', '_controller' => 'App\\Controller\\StatistiquesController::indexDGCA'], null, null, null, false, false, null]],
        '/statistiques/DM' => [[['_route' => 'app_statistiques_DM', '_controller' => 'App\\Controller\\StatistiquesController::indexDM'], null, null, null, false, false, null]],
        '/statistiques/DPIB' => [[['_route' => 'app_statistiques_DPIB', '_controller' => 'App\\Controller\\StatistiquesController::indexDPIB'], null, null, null, false, false, null]],
        '/admin/type/documents' => [[['_route' => 'app_type_documents_index', '_controller' => 'App\\Controller\\TypeDocumentsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/type/documents/new' => [[['_route' => 'app_type_documents_new', '_controller' => 'App\\Controller\\TypeDocumentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:227)'
                    .'|dmin/(?'
                        .'|di(?'
                            .'|rections/([^/]++)(?'
                                .'|(*:268)'
                                .'|/(?'
                                    .'|edit(*:284)'
                                    .'|play(*:296)'
                                    .'|stop(*:308)'
                                .')'
                                .'|(*:317)'
                            .')'
                            .'|visions/([^/]++)(?'
                                .'|(*:345)'
                                .'|/(?'
                                    .'|edit(*:361)'
                                    .'|play(*:373)'
                                    .'|stop(*:385)'
                                .')'
                                .'|(*:394)'
                            .')'
                        .')'
                        .'|postes/([^/]++)(?'
                            .'|(*:422)'
                            .'|/(?'
                                .'|del(*:437)'
                                .'|edit(*:449)'
                                .'|play(*:461)'
                                .'|stop(*:473)'
                            .')'
                            .'|(*:482)'
                        .')'
                        .'|se(?'
                            .'|cretariats/([^/]++)(?'
                                .'|(*:518)'
                                .'|/(?'
                                    .'|edit(*:534)'
                                    .'|play(*:546)'
                                    .'|stop(*:558)'
                                .')'
                                .'|(*:567)'
                            .')'
                            .'|rvices/([^/]++)(?'
                                .'|(*:594)'
                                .'|/(?'
                                    .'|edit(*:610)'
                                    .'|play(*:622)'
                                    .'|stop(*:634)'
                                .')'
                                .'|(*:643)'
                            .')'
                        .')'
                        .'|type/documents/([^/]++)(?'
                            .'|(*:679)'
                            .'|/(?'
                                .'|edit(*:695)'
                                .'|play(*:707)'
                                .'|stop(*:719)'
                            .')'
                            .'|(*:728)'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|(*:754)'
                            .'|/(?'
                                .'|edit(*:770)'
                                .'|play(*:782)'
                                .'|stop(*:794)'
                                .'|resetPassword(*:815)'
                            .')'
                            .'|(*:824)'
                        .')'
                    .')'
                .')'
                .'|/Affectations/(?'
                    .'|new/([^/]++)(*:864)'
                    .'|([^/]++)(?'
                        .'|(*:883)'
                        .'|/(?'
                            .'|valid(*:900)'
                            .'|edit(*:912)'
                        .')'
                        .'|(*:921)'
                    .')'
                .')'
                .'|/documents/([^/]++)(?'
                    .'|(*:953)'
                    .'|/(?'
                        .'|edit(*:969)'
                        .'|stop(*:981)'
                        .'|delete(*:995)'
                    .')'
                    .'|(*:1004)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        268 => [[['_route' => 'app_directions_show', '_controller' => 'App\\Controller\\DirectionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_directions_edit', '_controller' => 'App\\Controller\\DirectionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        296 => [[['_route' => 'app_directions_play', '_controller' => 'App\\Controller\\DirectionsController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        308 => [[['_route' => 'app_directions_stop', '_controller' => 'App\\Controller\\DirectionsController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        317 => [[['_route' => 'app_directions_delete', '_controller' => 'App\\Controller\\DirectionsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_divisions_show', '_controller' => 'App\\Controller\\DivisionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_divisions_edit', '_controller' => 'App\\Controller\\DivisionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        373 => [[['_route' => 'app_divisions_play', '_controller' => 'App\\Controller\\DivisionsController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        385 => [[['_route' => 'app_divisions_stop', '_controller' => 'App\\Controller\\DivisionsController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        394 => [[['_route' => 'app_divisions_delete', '_controller' => 'App\\Controller\\DivisionsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        422 => [[['_route' => 'app_postes_show', '_controller' => 'App\\Controller\\PostesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'app_postes_del', '_controller' => 'App\\Controller\\PostesController::valid'], ['id'], ['GET' => 0], null, false, false, null]],
        449 => [[['_route' => 'app_postes_edit', '_controller' => 'App\\Controller\\PostesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'app_postes_play', '_controller' => 'App\\Controller\\PostesController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        473 => [[['_route' => 'app_postes_stop', '_controller' => 'App\\Controller\\PostesController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        482 => [[['_route' => 'app_postes_delete', '_controller' => 'App\\Controller\\PostesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        518 => [[['_route' => 'app_secretariats_show', '_controller' => 'App\\Controller\\SecretariatsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_secretariats_edit', '_controller' => 'App\\Controller\\SecretariatsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        546 => [[['_route' => 'app_secretariats_play', '_controller' => 'App\\Controller\\SecretariatsController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        558 => [[['_route' => 'app_secretariats_stop', '_controller' => 'App\\Controller\\SecretariatsController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        567 => [[['_route' => 'app_secretariats_delete', '_controller' => 'App\\Controller\\SecretariatsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        594 => [[['_route' => 'app_services_show', '_controller' => 'App\\Controller\\ServicesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        610 => [[['_route' => 'app_services_edit', '_controller' => 'App\\Controller\\ServicesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [[['_route' => 'app_services_play', '_controller' => 'App\\Controller\\ServicesController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        634 => [[['_route' => 'app_services_stop', '_controller' => 'App\\Controller\\ServicesController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        643 => [[['_route' => 'app_services_delete', '_controller' => 'App\\Controller\\ServicesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        679 => [[['_route' => 'app_type_documents_show', '_controller' => 'App\\Controller\\TypeDocumentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'app_type_documents_edit', '_controller' => 'App\\Controller\\TypeDocumentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        707 => [[['_route' => 'app_type_documents_play', '_controller' => 'App\\Controller\\TypeDocumentsController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        719 => [[['_route' => 'app_type_documents_stop', '_controller' => 'App\\Controller\\TypeDocumentsController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        728 => [[['_route' => 'app_type_documents_delete', '_controller' => 'App\\Controller\\TypeDocumentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        754 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        770 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        782 => [[['_route' => 'app_users_play', '_controller' => 'App\\Controller\\UsersController::play'], ['id'], ['GET' => 0], null, false, false, null]],
        794 => [[['_route' => 'app_users_stop', '_controller' => 'App\\Controller\\UsersController::stop'], ['id'], ['GET' => 0], null, false, false, null]],
        815 => [[['_route' => 'app_users_resetPassword', '_controller' => 'App\\Controller\\UsersController::resetPassword'], ['id'], ['GET' => 0], null, false, false, null]],
        824 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        864 => [[['_route' => 'app_Affectations_new', '_controller' => 'App\\Controller\\AffectationsController::new'], ['doc'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        883 => [[['_route' => 'app_Affectations_show', '_controller' => 'App\\Controller\\AffectationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        900 => [[['_route' => 'app_Affectations_valid', '_controller' => 'App\\Controller\\AffectationsController::valid'], ['id'], ['GET' => 0], null, false, false, null]],
        912 => [[['_route' => 'app_Affectations_edit', '_controller' => 'App\\Controller\\AffectationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        921 => [[['_route' => 'app_Affectations_delete', '_controller' => 'App\\Controller\\AffectationsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        953 => [[['_route' => 'app_documents_show', '_controller' => 'App\\Controller\\DocumentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        969 => [[['_route' => 'app_documents_edit', '_controller' => 'App\\Controller\\DocumentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        981 => [[['_route' => 'app_documents_stop', '_controller' => 'App\\Controller\\DocumentsController::stop'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        995 => [[['_route' => 'app_documents_delete', '_controller' => 'App\\Controller\\DocumentsController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        1004 => [
            [['_route' => 'app_documents_play', '_controller' => 'App\\Controller\\DocumentsController::play'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
