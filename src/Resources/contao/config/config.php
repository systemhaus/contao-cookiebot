<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

/**
 * Register a hook for inserting the main JS into every page
 */
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = array('Systemhaus\\Cookiebot\\CookieAcceptBanner', 'insertJavascriptIntoFullPage');

/**
 * Register a new frontend module for showing the details about cookies in a privacy page
 */
$GLOBALS['FE_MOD']['cookiebotBundle']['cookieDeclaration'] = 'Systemhaus\\Cookiebot\\CookieDeclaration';
