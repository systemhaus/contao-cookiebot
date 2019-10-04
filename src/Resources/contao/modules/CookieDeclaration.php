<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

namespace Systemhaus\Cookiebot;

use Contao\Module;
use PageModel;

/**
 * Frontend module for displaying the Cookiebot details in a privacy page
 */
class CookieDeclaration extends Module
{
    protected $strTemplate = 'mod_cookie_declaration';

    protected function compile()
    {
        global $objPage;

        if (($objRootPage = PageModel::findByPk($objPage->rootId)) !== null) {
            $api_key = $objRootPage->cookiebot_api_key;

            $this->Template->api_key = $api_key;
        }
    }
}
