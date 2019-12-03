<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'cookiebot_active';

$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace(
    '{publish_legend}',
    '{cookiebot_legend:hide},cookiebot_active;{publish_legend}',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['root']
);

$GLOBALS['TL_DCA']['tl_page']['subpalettes']['cookiebot_active'] = 'cookiebot_api_key,cookiebot_show_banner,cookiebot_blockingmode_auto';

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
