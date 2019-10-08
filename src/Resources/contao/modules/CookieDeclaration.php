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

    public function generate()
    {
        if (TL_MODE === 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '###' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['cookieDeclaration'][0] . '###');
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
            return $objTemplate->parse();
        }
        return parent::generate();
    }
    
    protected function compile()
    {
        global $objPage;

        if (($objRootPage = PageModel::findByPk($objPage->rootId)) !== null) {
            $api_key = $objRootPage->cookiebot_api_key;

            $this->Template->active = $objRootPage->cookiebot_active;
            $this->Template->api_key = $api_key;
        }
    }
}
