<?php

namespace systemhaus;

/*
/Klasse zur Überprüfung
*/
class Validation {
/*
/Funktion zur Überprüfung der Api-Nummer auf Länge und Zeichen
*/
	public function validateApiNumber($strRegexp, $varValue, $objWidget) {
		if($strRegexp == "validateCookiebotApi") {
			if(!preg_match('/^[0-9]{8}([\-][0-9]{4}){3}[\-][0-9]{12}$/', $varValue)) {
				$objWidget->addError('The entered number is not a valid Cookiebot-Api.');
			}
		}
	}
}
