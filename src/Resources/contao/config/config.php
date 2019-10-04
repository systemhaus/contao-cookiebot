<?php

declare(strict_types=1);

/**
 *Hook registrieren zum Editieren der Head-Sektion
 */
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = array('Systemhaus\\Cookiebot\\CookieAcceptBanner', 'blockAllCookies');
/**
 *Hook zur Überprüfung der Api-Nummer
 */
$GLOBALS['TL_HOOKS']['addCustomRegexp']['validateCookiebotApi'] = array('Systemhaus\\Cookiebot\\Validation', 'validateApiNumber');
/**
 *Frontendmodul für Cookieerklärung
 */
$GLOBALS['FE_MOD']['cookiebotBundle']['cookieDeclaration'] = 'Systemhaus\\Cookiebot\\CookieDeclaration';
