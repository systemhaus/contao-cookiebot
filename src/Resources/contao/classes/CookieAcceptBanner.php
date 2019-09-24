<?php

namespace Contao;

class CookieAcceptBanner {
	public function blockCookies() {
		\Controller::loadDataContainer('TL_CONFIG');

		$GLOBALS['TL_HEAD'][0] = '<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="'.$GLOBALS['TL_CONFIG']['cookiebotApiNumber'].'" type="text/javascript". data-blockingmode="auto"></script>';
		\Controller::loadDataContainer('TL_LANG');
		print_r($GLOBALS['TL_LANG']['tl_layout']);
?>
<!--
<head>
<title>Test2</title>
</head>
-->
<?php
	}

	public function blockAllCookies($strBuffer, $strTemplate) {
		
		\Controller::loadDataContainer('TL_CONFIG');
		if('fe_page'===$strTemplate) {

			echo($buffer);
			$returnBuffer = str_replace(
				"<head>",
				 '<head><script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="'.$GLOBALS['TL_CONFIG']['cookiebotApiNumber'].'" type="text/javascript". data-blockingmode="auto"></script>',
				"$strBuffer"
			);
		}
	return $returnBuffer;
	}
}

//'<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="'.$GLOBALS['TL_CONFIG']['cookiebotApiNumber'].'" type="text/javascript". data-blockingmode="auto"></script>',
