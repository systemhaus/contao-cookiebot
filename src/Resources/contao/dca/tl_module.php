<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

/**
 * New DCA palette for the Cookiebot fields
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['cookiebot_declaration'] = '{title_legend},name,headline,type;{template_legend:hide},cookiebot_declaration_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';


$GLOBALS['TL_DCA']['tl_module']['fields']['cookiebot_declaration_template'] = [
    'label_'           => &$GLOBALS['TL_LANG']['tl_module']['cookiebot_declaration_template'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => array('Systemhaus\Cookiebot\Modules\ModCookieDeclaration', 'getCookiebotDeclarationTemplates'),
    'eval'             => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class' => 'w50'),
    'sql'              => "varchar(64) NOT NULL default ''",
];
