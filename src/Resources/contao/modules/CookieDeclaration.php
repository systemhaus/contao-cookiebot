<?php

declare(strict_types=1);

namespace Systemhaus\Cookiebar;

use Contao\Module;

/**
 *Verweis auf Template für Cookie-Erklärung
 */
class CookieDeclaration extends Module
{
    protected $strTemplate = 'mod_cookie_declaration';

    protected function compile()
    {
    }
}
