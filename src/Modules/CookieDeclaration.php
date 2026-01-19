<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

namespace Systemhaus\Cookiebot\Modules;

use Contao\BackendTemplate;
use Contao\FrontendTemplate;
use Contao\Module;
use Contao\PageModel;

/**
 * Frontend module for displaying the Cookiebot details in a privacy page
 */
class CookieDeclaration extends Module
{
    protected $strTemplate = 'mod_cookiebot_declaration';

    public function generate()
    {
        if (\Contao\System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(\Contao\System::getContainer()->get('request_stack')->getCurrentRequest() ?? \Symfony\Component\HttpFoundation\Request::create(''))) {
            $objTemplate = new BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '###' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['cookiebot_declaration'][0] . '###');
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
            if ($this->cookiebot_declaration_template && $this->cookiebot_declaration_template !== 'mod_cookiebot_declaration') {
                $this->Template = new FrontendTemplate($this->cookiebot_declaration_template);
            }

            $api_key = $objRootPage->cookiebot_api_key;
            $location = $objRootPage->cookiebot_cdn_location;
            $additional_classes = 'mod_cookiebot';

            $this->Template->additional_classes = $additional_classes;
            $this->Template->active = $objRootPage->cookiebot_active;
            $this->Template->api_key = $api_key;
            $this->Template->location = $location;
        }
    }
}
