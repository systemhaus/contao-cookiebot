<?php
/*
/Hook registrieren zum Editieren der Head-Sektion
*/
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = array('systemhaus\\CookieAcceptBanner', 'blockAllCookies');
/*
/Hook zur Überprüfung der Api-Nummer
*/
$GLOBALS['TL_HOOKS']['addCustomRegexp']['validateCookiebotApi'] = array('systemhaus\\Validation', 'validateApiNumber');
/*
/Frontendmodul für Cookieerklärung
*/
$GLOBALS['FE_MOD']['cookiebotBundle']['cookieDeclaration'] = 'systemhaus\\CookieDeclaration';

