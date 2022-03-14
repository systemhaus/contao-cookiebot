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
    'Activate Cookiebot',
    'This enables the Cookiebot script for this website root.',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_api_key'] = [
    'Registration Code',
    'Enter the registration code you received from Cookiebot or one of the resellers.',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_show_banner'] = [
    'Show Cookiebot bar',
    'This enables the Cookiebot bar for each page under this website root.',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_blockingmode_auto'] = [
    'Automatic cookie blocking',
    'This enables automatic cookie blocking. Attention: If disabled, all cookies must be blocked manually!',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_culture'] = [
    'Language of the Cookiebot bar',
    'Optionally sets the language of the Cookiebot bar to a maintained language of Cookiebot (e.g. en).',
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_cdn_location'] = [
    'Cookiebot CDN location',
    'Choose "European Union" in order to be GDPR compliant'
];
$GLOBALS['TL_LANG']['tl_page']['cookiebot_cdn_location_options'] = [
    'eu' => 'European Union',
    'us' => 'United States'
];
