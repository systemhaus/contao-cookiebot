<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

namespace Systemhaus\Cookiebot;

use PageModel;

/**
 * Insert the Cookiebot JS first place in the page <head>
 */
class CookieAcceptBanner
{
    const JS_STRING = '<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="%s" type="text/javascript". data-blockingmode="auto"></script>';

    public function insertJavascriptIntoFullPage($strBuffer, $strTemplate)
    {
        global $objPage;
        if (($objRootPage = PageModel::findByPk($objPage->rootId)) !== null) {
            $api_key = $objRootPage->cookiebot_api_key;
            $html = sprintf(self::JS_STRING, $api_key);
            $strBuffer = str_replace(
                '<head>',
                "<head>\n$html",
                $strBuffer
            );
        }

        return $strBuffer;
    }
}
