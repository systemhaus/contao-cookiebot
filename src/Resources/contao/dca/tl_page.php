<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'cookiebot_active';
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['cookiebot_active'] = 'cookiebot_api_key,cookiebot_show_banner,cookiebot_blockingmode_auto,cookiebot_culture,cookiebot_cdn_location';

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebot_active'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebot_active'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('submitOnChange' => true),
    'sql' => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebot_api_key'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebot_api_key'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('decodeEntities' => true, 'tl_class' => 'w50'),
    'sql' => "text default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebot_show_banner'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebot_show_banner'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('tl_class' => 'w50 m12'),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebot_blockingmode_auto'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebot_blockingmode_auto'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('tl_class' => 'w50 m12'),
    'sql' => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebot_culture'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebot_culture'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class' => 'w50', 'maxlength' => 3),
    'sql' => "char(3) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebot_cdn_location'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebot_cdn_location'],
    'exclude' => true,
    'inputType' => 'select',
    'options' => $GLOBALS['TL_LANG']['tl_page']['cookiebot_cdn_location_options'],
    'eval' => ['tl_class' => 'w50', 'includeBlankOption' => false],
    'sql' => "char(2) NOT NULL default 'eu'"
);

if (isset($GLOBALS['TL_DCA']['tl_page']['palettes']['rootfallback'])) {
    PaletteManipulator::create()
        ->addLegend('cookiebot_legend', 'publish_legend', PaletteManipulator::POSITION_BEFORE)
        ->addField('cookiebot_active', 'cookiebot_legend', PaletteManipulator::POSITION_APPEND)
        ->applyToPalette('root', 'tl_page')
        ->applyToPalette('rootfallback', 'tl_page')
    ;
} else {
    PaletteManipulator::create()
        ->addLegend('cookiebot_legend', 'publish_legend', PaletteManipulator::POSITION_BEFORE)
        ->addField('cookiebot_active', 'cookiebot_legend', PaletteManipulator::POSITION_APPEND)
        ->applyToPalette('root', 'tl_page')
    ;
}
