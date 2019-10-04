<?php

declare(strict_types=1);

/*
 * This file is part of [systemhaus/contao-cookiebot-bundle].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Systemhaus\Cookiebot\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Systemhaus\Cookiebot\ContaoCookiebotBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoCookiebotBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
