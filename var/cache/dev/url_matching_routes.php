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
        '/blog/blog/new' => [[['_route' => 'blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog/like-unlike' => [[['_route' => 'front_blog_like_unlike', '_controller' => 'App\\Controller\\BlogController::like'], null, null, null, false, false, null]],
        '/chambre' => [[['_route' => 'app_chambre_index', '_controller' => 'App\\Controller\\ChambreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chambre/new' => [[['_route' => 'app_chambre_new', '_controller' => 'App\\Controller\\ChambreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/event/stats/type' => [[['_route' => 'api_event_stats_by_type', '_controller' => 'App\\Controller\\Api\\EventApiController::statsByType'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/ajouterEvent' => [[['_route' => 'ajouterEvent', '_controller' => 'App\\Controller\\EventController::ajouterEvent'], null, null, null, false, false, null]],
        '/EventFront' => [[['_route' => 'EventFront', '_controller' => 'App\\Controller\\EventController::EventFront'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/front/hotel' => [[['_route' => 'app_hotel_index_front', '_controller' => 'App\\Controller\\FrontController::hotelfront'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'app_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hotel/new' => [[['_route' => 'app_hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hotel/hotel/stat' => [[['_route' => 'hotel_reservation_stat', '_controller' => 'App\\Controller\\HotelController::hotelReservationStatistics'], null, ['GET' => 0], null, false, false, null]],
        '/programme' => [[['_route' => 'app_programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programme/new' => [[['_route' => 'app_programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservationEvent', '_controller' => 'App\\Controller\\ReservationEventController::afficher'], null, null, null, false, false, null]],
        '/ajouterreservation' => [[['_route' => 'Addreservation', '_controller' => 'App\\Controller\\ReservationEventController::Addreservation'], null, null, null, false, false, null]],
        '/reservation/hotel' => [[['_route' => 'app_reservation_hotel_index', '_controller' => 'App\\Controller\\ReservationHotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/hotel/back' => [[['_route' => 'app_reservation_back', '_controller' => 'App\\Controller\\ReservationHotelController::back'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/hotel/new' => [[['_route' => 'app_reservation_hotel_new', '_controller' => 'App\\Controller\\ReservationHotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/hotel/reservation/hotel/calendar' => [[['_route' => 'app_reservation_hotel_calendar', '_controller' => 'App\\Controller\\ReservationHotelController::reservationCalendar'], null, null, null, false, false, null]],
        '/reservation/vol/admin' => [[['_route' => 'app_reservation_vol_admin_index', '_controller' => 'App\\Controller\\ReservationVolAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/vol/admin/new' => [[['_route' => 'app_reservation_vol_admin_new', '_controller' => 'App\\Controller\\ReservationVolAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/vol/admin/reservationvol/stat' => [[['_route' => 'reservationvol_stat', '_controller' => 'App\\Controller\\ReservationVolAdminController::reservationVolStatistics'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage' => [[['_route' => 'app_reservation_voyage_index', '_controller' => 'App\\Controller\\ReservationVoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/voyage/new' => [[['_route' => 'app_reservation_voyage_new', '_controller' => 'App\\Controller\\ReservationVoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationvol' => [[['_route' => 'app_reservationvol_index', '_controller' => 'App\\Controller\\ReservationvolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationvol/new' => [[['_route' => 'app_reservationvol_new', '_controller' => 'App\\Controller\\ReservationvolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationvol/show' => [[['_route' => 'app_reservationvol_show', '_controller' => 'App\\Controller\\ReservationvolController::show'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/type/evenement' => [[['_route' => 'app_type_evenement', '_controller' => 'App\\Controller\\TypeEvenementController::index'], null, null, null, false, false, null]],
        '/ajouterTypeEvenement' => [[['_route' => 'AddTypeEvenement', '_controller' => 'App\\Controller\\TypeEvenementController::ajouterEvent'], null, null, null, false, false, null]],
        '/forgot-pass' => [[['_route' => 'app_jdida', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\UserController::downloadPdf'], null, null, null, false, false, null]],
        '/download' => [[['_route' => 'app_download', '_controller' => 'App\\Controller\\UserController::download'], null, null, null, false, false, null]],
        '/admin/profile/edit' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
        '/vol' => [[['_route' => 'app_vol_index', '_controller' => 'App\\Controller\\VolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vol/search' => [[['_route' => 'app_vol_search', '_controller' => 'App\\Controller\\VolController::search'], null, ['GET' => 0], null, false, false, null]],
        '/vol/new' => [[['_route' => 'app_vol_new', '_controller' => 'App\\Controller\\VolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vol/vol/pdf' => [[['_route' => 'app_vol_pdf', '_controller' => 'App\\Controller\\VolController::generatePdf'], null, ['GET' => 0], null, false, false, null]],
        '/vol/vol/calendar' => [[['_route' => 'app_vol_calendar', '_controller' => 'App\\Controller\\VolController::volCalendar'], null, null, null, false, false, null]],
        '/volclass' => [[['_route' => 'app_volclass_index', '_controller' => 'App\\Controller\\VolclassController::index'], null, ['GET' => 0], null, true, false, null]],
        '/volclass/new' => [[['_route' => 'app_volclass_new', '_controller' => 'App\\Controller\\VolclassController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voyage' => [[['_route' => 'app_voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, null, null, true, false, null]],
        '/voyage/clientF' => [[['_route' => 'app_voyage_clientF', '_controller' => 'App\\Controller\\VoyageController::clientF'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/new' => [[['_route' => 'app_voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/blog/show/([^/]++)(*:204)'
                .'|/chambre/([^/]++)(?'
                    .'|(*:232)'
                    .'|/edit(*:245)'
                    .'|(*:253)'
                .')'
                .'|/modifier(?'
                    .'|Event/([^/]++)(*:288)'
                    .'|reservationEvent/([^/]++)(*:321)'
                    .'|TypeEvenement/([^/]++)(*:351)'
                .')'
                .'|/suppression(?'
                    .'|Event/([^/]++)(*:389)'
                    .'|reservationEvent/([^/]++)(*:422)'
                    .'|Typeevent/([^/]++)(*:448)'
                .')'
                .'|/hotel/([^/]++)(?'
                    .'|(*:475)'
                    .'|/edit(*:488)'
                    .'|(*:496)'
                .')'
                .'|/programme/(?'
                    .'|clientprog/([^/]++)(*:538)'
                    .'|([^/]++)(?'
                        .'|(*:557)'
                        .'|/edit(*:570)'
                        .'|(*:578)'
                    .')'
                    .'|generate/([^/]++)(*:604)'
                .')'
                .'|/generate\\-pdf/([^/]++)(*:636)'
                .'|/rese(?'
                    .'|rvation(?'
                        .'|/(?'
                            .'|hotel/([^/]++)(?'
                                .'|(*:683)'
                                .'|/(?'
                                    .'|edit(*:699)'
                                    .'|invoice(*:714)'
                                .')'
                                .'|(*:723)'
                            .')'
                            .'|vo(?'
                                .'|l/admin/([^/]++)(?'
                                    .'|(*:756)'
                                    .'|/edit(*:769)'
                                    .'|(*:777)'
                                .')'
                                .'|yage/([^/]++)(?'
                                    .'|(*:802)'
                                    .'|/edit(*:815)'
                                    .'|(*:823)'
                                .')'
                            .')'
                        .')'
                        .'|vol/([^/]++)(?'
                            .'|/edit(*:854)'
                            .'|(*:862)'
                        .')'
                    .')'
                    .'|t/([^/]++)(*:882)'
                .')'
                .'|/vo(?'
                    .'|l(?'
                        .'|/([^/]++)(?'
                            .'|(*:913)'
                            .'|/edit(*:926)'
                            .'|(*:934)'
                        .')'
                        .'|class/([^/]++)(?'
                            .'|(*:960)'
                            .'|/edit(*:973)'
                            .'|(*:981)'
                        .')'
                    .')'
                    .'|yage/([^/]++)(?'
                        .'|(*:1007)'
                        .'|/edit(*:1021)'
                        .'|(*:1030)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1072)'
                    .'|wdt/([^/]++)(*:1093)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1140)'
                            .'|router(*:1155)'
                            .'|exception(?'
                                .'|(*:1176)'
                                .'|\\.css(*:1190)'
                            .')'
                        .')'
                        .'|(*:1201)'
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
        204 => [[['_route' => 'front_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_chambre_show', '_controller' => 'App\\Controller\\ChambreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_chambre_edit', '_controller' => 'App\\Controller\\ChambreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'app_chambre_delete', '_controller' => 'App\\Controller\\ChambreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'modifierEvenement', '_controller' => 'App\\Controller\\EventController::modifierArticle'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'modifierreservationEvent', '_controller' => 'App\\Controller\\ReservationEventController::modifierreservationEvent'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'modifierTypeEvenement', '_controller' => 'App\\Controller\\TypeEvenementController::modifierTypeEvenement'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'suppressionEvent', '_controller' => 'App\\Controller\\EventController::suppressionEvent'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'deletereservationEvent', '_controller' => 'App\\Controller\\ReservationEventController::suppressionreservationEvent'], ['id'], null, null, false, true, null]],
        448 => [[['_route' => 'suppressionTypeEvent', '_controller' => 'App\\Controller\\TypeEvenementController::suppressionTypeEvent'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'app_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [[['_route' => 'app_hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_programme_clientprog', '_controller' => 'App\\Controller\\ProgrammeController::clientprog'], ['voyageId'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'app_programme_show', '_controller' => 'App\\Controller\\ProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        570 => [[['_route' => 'app_programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        578 => [[['_route' => 'app_programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        604 => [[['_route' => 'app_programme_generate_qr_code', '_controller' => 'App\\Controller\\ProgrammeController::generateQrCode'], ['id'], ['GET' => 0], null, false, true, null]],
        636 => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\ReservationEventController::generatePDF'], ['id'], null, null, false, true, null]],
        683 => [
            [['_route' => 'app_reservation_hotel_show', '_controller' => 'App\\Controller\\ReservationHotelController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reservation_afficher', '_controller' => 'App\\Controller\\ReservationHotelController::afficher'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        699 => [[['_route' => 'app_reservation_hotel_edit', '_controller' => 'App\\Controller\\ReservationHotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        714 => [[['_route' => 'app_reservation_hotel_invoice', '_controller' => 'App\\Controller\\ReservationHotelController::generateInvoice'], ['id'], ['GET' => 0], null, false, false, null]],
        723 => [[['_route' => 'app_reservation_hotel_delete', '_controller' => 'App\\Controller\\ReservationHotelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'app_reservation_vol_admin_show', '_controller' => 'App\\Controller\\ReservationVolAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        769 => [[['_route' => 'app_reservation_vol_admin_edit', '_controller' => 'App\\Controller\\ReservationVolAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        777 => [[['_route' => 'app_reservation_vol_admin_delete', '_controller' => 'App\\Controller\\ReservationVolAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        802 => [[['_route' => 'app_reservation_voyage_show', '_controller' => 'App\\Controller\\ReservationVoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        815 => [[['_route' => 'app_reservation_voyage_edit', '_controller' => 'App\\Controller\\ReservationVoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        823 => [[['_route' => 'app_reservation_voyage_delete', '_controller' => 'App\\Controller\\ReservationVoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        854 => [[['_route' => 'app_reservationvol_edit', '_controller' => 'App\\Controller\\ReservationvolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'app_reservationvol_delete', '_controller' => 'App\\Controller\\ReservationvolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        882 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\UserController::resetpassword'], ['token'], null, null, false, true, null]],
        913 => [[['_route' => 'app_vol_show', '_controller' => 'App\\Controller\\VolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_vol_edit', '_controller' => 'App\\Controller\\VolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        934 => [[['_route' => 'app_vol_delete', '_controller' => 'App\\Controller\\VolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        960 => [[['_route' => 'app_volclass_show', '_controller' => 'App\\Controller\\VolclassController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        973 => [[['_route' => 'app_volclass_edit', '_controller' => 'App\\Controller\\VolclassController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        981 => [[['_route' => 'app_volclass_delete', '_controller' => 'App\\Controller\\VolclassController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1007 => [[['_route' => 'app_voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1021 => [[['_route' => 'app_voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1030 => [[['_route' => 'app_voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1072 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1093 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1140 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1155 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1176 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1190 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1201 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
