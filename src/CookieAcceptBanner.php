<?php

/**
 * Contao Cookiebot extension
 *
 * @copyright 2019 ETES GmbH
 * @license LGPLv3
 */

declare(strict_types=1);

namespace Systemhaus\Cookiebot;

use Contao\CoreBundle\Routing\ResponseContext\Csp\CspHandler;
use Contao\PageModel;
use Contao\System;

/**
 * Insert the Cookiebot JS first place in the page <head>
 */
class CookieAcceptBanner
{
    const JS_STRING = '<script id="Cookiebot" src="https://consent.cookiebot.%s/uc.js" data-cbid="%s" type="text/javascript"%s %s%s></script>';

    public function insertJavascriptIntoFullPage($strBuffer, $strTemplate)
    {
        if (false === strpos($strTemplate, 'fe_', 0)) {
            return $strBuffer;
        }

        global $objPage;
        if (($objRootPage = PageModel::findByPk($objPage->rootId)) !== null && $objRootPage->cookiebot_active && $objRootPage->cookiebot_show_banner) {
            $api_key = $objRootPage->cookiebot_api_key;
            $location = $objRootPage->cookiebot_cdn_location;
            if ($api_key !== null) {
                $blockingmode = '';
                if ((int)$objRootPage->cookiebot_blockingmode_auto === 1) {
                    $blockingmode = 'data-blockingmode="auto"';
                }
                $culture = '';
                if (!empty($objRootPage->cookiebot_culture)) {
                    $culture = ' data-culture="'.$objRootPage->cookiebot_culture.'"';
                }
                $tld = $location == 'eu' ? 'eu' : 'com';
                $nonce = $this->applyContentSecurityPolicy($tld);
                $html = sprintf(self::JS_STRING, $tld, $api_key, $nonce, $blockingmode, $culture);
                $strBuffer = str_replace(
                    '</title>',
                    "</title>\n$html",
                    $strBuffer
                );
            }
        }
        return $strBuffer;
    }

    /**
     * Adds the Cookiebot hosts to the Content Security Policy of the page
     * (Contao 5.3+) and returns the nonce attribute for the script tag, or an
     * empty string if no policy is active.
     */
    private function applyContentSecurityPolicy($tld)
    {
        if (!class_exists(CspHandler::class)) {
            return '';
        }

        $container = System::getContainer();
        if (!$container->has('contao.routing.response_context_accessor')) {
            return '';
        }

        $responseContext = $container->get('contao.routing.response_context_accessor')->getResponseContext();
        if ($responseContext === null || !$responseContext->has(CspHandler::class)) {
            return '';
        }

        $csp = $responseContext->get(CspHandler::class);
        $consent = 'https://consent.cookiebot.'.$tld;
        $consentCdn = 'https://consentcdn.cookiebot.'.$tld;

        $csp->addSource('script-src', $consent.' '.$consentCdn);
        $csp->addSource('connect-src', $consent.' '.$consentCdn);
        $csp->addSource('frame-src', $consentCdn);

        $nonce = $csp->getNonce('script-src');

        return $nonce ? ' nonce="'.$nonce.'"' : '';
    }
}
