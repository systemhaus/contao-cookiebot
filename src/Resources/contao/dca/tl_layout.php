<?php
/*
/*
//add the field 'cookieDeclaratoin' to the palette 
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace (
	'{title_legend}',
	'{cookiebot_legend},cookieDeclaration;{title_legend}',
	$GLOBALS['TL_DCA']['tl_layout']['palettes']['default']
);

/*
//add meta-data to field 'cookieDeclaration'
$GLOBALS['TL_DCA']['tl_layout']['fields']['cookieDeclaration'] = array (
	'inputType'		=> 'text',
	'eval'			=> array('nospace'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50', 'rgxp'=>'alnum')
);
*/
