<?php
//$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('Contao\\CookieAcceptBanner', 'blockCookies');
//$GLOBALS['TL_HOOKS']['generatePage'][] = array('Contao\\CookieAcceptBanner', 'blockCookies');
//$GLOBALS['TL_JAVASCRIPT'][cookieBanner] = 'Contao\\CookieAcceptBanner';
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = array('Contao\\CookieAcceptBanner', 'blockAllCookies');
