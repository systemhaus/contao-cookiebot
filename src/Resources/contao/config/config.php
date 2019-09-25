<?php
/*
/Hook registrieren zum Editieren der Head-Sektion
*/
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = array('Contao\\CookieAcceptBanner', 'blockAllCookies');
/*
/Frontendmodul für Cookieerklärung
*/
$GLOBALS['FE_MOD']['cookiebotBundle']['cookieDeclaration'] = 'Contao2\\CookieDeclaration';

