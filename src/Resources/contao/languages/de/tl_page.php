<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

/**
 * Language strings for the tl_page DCA fields
 */
$GLOBALS['TL_LANG']['tl_page']['cookiebot_legend'] = 'Cookiebot';
$GLOBALS['TL_LANG']['tl_page']['cookiebot_active'] = [
    'Cookiebot aktivieren',
    'Aktiviert das Cookiebot-Skript für diesen Startpunkt.',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_api_key'] = [
    'Registrierungsschlüssel',
    'Geben Sie den Registrierungsschlüssel ein, den Sie von Cookiebot oder einem Wiederverkäufer erhalten haben.',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_show_banner'] = [
    'Cookiebot-Leiste anzeigen',
    'Aktiviert die Anzeige der Cookiebot-Leiste auf allen Unterseiten.',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_blockingmode_auto'] = [
    'Automatische Cookie-Blockierung',
    'Aktiviert die automatische Cookie-Blockierung. Achtung: Wenn deaktiviert, müssen Cookies manuell blockiert werden!',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_culture'] = [
    'Sprache der Cookiebot-Leiste',
    'Setzt die Sprache der Cookiebot-Leiste optional auf eine gepflegte Sprache von Cookiebot (z.B. de).',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_cdn_location'] = [
    'Standort des Cookiebot-CDN',
    'Wählen Sie "Europäische Union" für DS-GVO-Konformität'
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_cdn_location_options'] = [
    'eu' => 'Europäische Union',
    'us' => 'Vereinigte Staaten von Amerika'
];
