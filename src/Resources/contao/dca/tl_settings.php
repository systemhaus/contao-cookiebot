<?php
/**
 *add the field 'cookiebotApiNumber to the palette 
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace (
	'defaultChmod',
	'defaultChmod;{cookiebot_legend},cookiebotApiNumber',
	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default']
);

/**
 *add meta-data to field 'cookiebotApiNumber'
 */ 
$GLOBALS['TL_DCA']['tl_settings']['fields']['cookiebotApiNumber'] = array (
	'inputType'		=> 'text',
	'eval'			=> array('nospace'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50', 'rgxp'=>'validateCookiebotApi')
);
