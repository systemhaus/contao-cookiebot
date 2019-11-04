<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

namespace Systemhaus\Cookiebot\Modules;

class ModCookieDeclaration extends \Backend
{

    /**
     * Return custom cookiebot declaration templates as array
     *
     * @return array
     */
    public function getCookiebotDeclarationTemplates()
    {
        return $this->getTemplateGroup('mod_cookiebot_declaration_');
    }
}
