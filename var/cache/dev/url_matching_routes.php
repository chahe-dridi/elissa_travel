<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/airport' => [[['_route' => 'app_airport_index', '_controller' => 'App\\Controller\\AirportController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/airport/new' => [[['_route' => 'app_airport_new', '_controller' => 'App\\Controller\\AirportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/airport/airport/stat' => [[['_route' => 'airport_stat', '_controller' => 'App\\Controller\\AirportController::airportStatistics'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation/vol/admin' => [[['_route' => 'app_reservation_vol_admin_index', '_controller' => 'App\\Controller\\ReservationVolAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/vol/admin/new' => [[['_route' => 'app_reservation_vol_admin_new', '_controller' => 'App\\Controller\\ReservationVolAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/vol/admin/reservationvol/stat' => [[['_route' => 'reservationvol_stat', '_controller' => 'App\\Controller\\ReservationVolAdminController::reservationVolStatistics'], null, ['GET' => 0], null, false, false, null]],
        '/reservationvol' => [[['_route' => 'app_reservationvol_index', '_controller' => 'App\\Controller\\ReservationvolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationvol/new' => [[['_route' => 'app_reservationvol_new', '_controller' => 'App\\Controller\\ReservationvolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationvol/show' => [[['_route' => 'app_reservationvol_show', '_controller' => 'App\\Controller\\ReservationvolController::show'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/forgot-pass' => [[['_route' => 'app_jdida', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/vol' => [[['_route' => 'app_vol_index', '_controller' => 'App\\Controller\\VolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vol/search' => [[['_route' => 'app_vol_search', '_controller' => 'App\\Controller\\VolController::search'], null, ['GET' => 0], null, false, false, null]],
        '/vol/new' => [[['_route' => 'app_vol_new', '_controller' => 'App\\Controller\\VolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vol/vol/pdf' => [[['_route' => 'app_vol_pdf', '_controller' => 'App\\Controller\\VolController::generatePdf'], null, ['GET' => 0], null, false, false, null]],
        '/vol/vol/calendar' => [[['_route' => 'app_vol_calendar', '_controller' => 'App\\Controller\\VolController::volCalendar'], null, null, null, false, false, null]],
        '/volclass' => [[['_route' => 'app_volclass_index', '_controller' => 'App\\Controller\\VolclassController::index'], null, ['GET' => 0], null, true, false, null]],
        '/volclass/new' => [[['_route' => 'app_volclass_new', '_controller' => 'App\\Controller\\VolclassController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/users/pdf' => [[['_route' => 'users_pdf', '_controller' => 'App\\Controller\\UserController::generatePdf'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/utilisateur(?'
                        .'|/(?'
                            .'|status/([^/]++)(*:50)'
                            .'|([^/]++)(?'
                                .'|(*:68)'
                                .'|/edit(*:80)'
                            .')'
                        .')'
                        .'|([^/]++)/suppression(*:109)'
                    .')'
                    .'|irport/(?'
                        .'|([^/]++)(?'
                            .'|(*:139)'
                            .'|/edit(*:152)'
                            .'|(*:160)'
                        .')'
                        .'|search(*:175)'
                    .')'
                .')'
                .'|/rese(?'
                    .'|rvation(?'
                        .'|/vol/admin/([^/]++)(?'
                            .'|(*:225)'
                            .'|/edit(*:238)'
                            .'|(*:246)'
                        .')'
                        .'|vol/([^/]++)(?'
                            .'|/edit(*:275)'
                            .'|(*:283)'
                        .')'
                    .')'
                    .'|t/([^/]++)(*:303)'
                .')'
                .'|/vol(?'
                    .'|/([^/]++)(?'
                        .'|(*:331)'
                        .'|/edit(*:344)'
                        .'|(*:352)'
                    .')'
                    .'|class/([^/]++)(?'
                        .'|(*:378)'
                        .'|/edit(*:391)'
                        .'|(*:399)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:440)'
                    .'|wdt/([^/]++)(*:460)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:506)'
                            .'|router(*:520)'
                            .'|exception(?'
                                .'|(*:540)'
                                .'|\\.css(*:553)'
                            .')'
                        .')'
                        .'|(*:563)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'Status', '_controller' => 'App\\Controller\\AdminUserController::DisableOrEnableUser'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        109 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        139 => [[['_route' => 'app_airport_show', '_controller' => 'App\\Controller\\AirportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        152 => [[['_route' => 'app_airport_edit', '_controller' => 'App\\Controller\\AirportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        160 => [[['_route' => 'app_airport_delete', '_controller' => 'App\\Controller\\AirportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        175 => [[['_route' => 'app_airport_search', '_controller' => 'App\\Controller\\AirportController::search'], [], ['GET' => 0], null, false, false, null]],
        225 => [[['_route' => 'app_reservation_vol_admin_show', '_controller' => 'App\\Controller\\ReservationVolAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_reservation_vol_admin_edit', '_controller' => 'App\\Controller\\ReservationVolAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_reservation_vol_admin_delete', '_controller' => 'App\\Controller\\ReservationVolAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_reservationvol_edit', '_controller' => 'App\\Controller\\ReservationvolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        283 => [[['_route' => 'app_reservationvol_delete', '_controller' => 'App\\Controller\\ReservationvolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\UserController::resetpassword'], ['token'], null, null, false, true, null]],
        331 => [[['_route' => 'app_vol_show', '_controller' => 'App\\Controller\\VolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_vol_edit', '_controller' => 'App\\Controller\\VolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        352 => [[['_route' => 'app_vol_delete', '_controller' => 'App\\Controller\\VolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_volclass_show', '_controller' => 'App\\Controller\\VolclassController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_volclass_edit', '_controller' => 'App\\Controller\\VolclassController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'app_volclass_delete', '_controller' => 'App\\Controller\\VolclassController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        440 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        460 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        506 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        520 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        540 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        553 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        563 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
