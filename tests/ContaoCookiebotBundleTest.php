<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace systemhaus\CookiebotBundle\Tests;

use systemhaus\CookiebotBundle\ContaoCookiebotBundle;
use PHPUnit\Framework\TestCase;

class ContaoCookiebotBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoCookiebotBundle();

        $this->assertInstanceOf('Contao\CookiebotBundle\ContaoCookiebotBundle', $bundle);
    }
}
