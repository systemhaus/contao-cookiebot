# Contao Cookiebot Extension

This extension is used to implement cookiebot in a website

## Install

This extension can be installed using composer

```bash
composer require systemhaus/contao-cookiebot-bundle/
```

## Configuring ContaoCookiebotBundle

This extension provides a field in the contao settings and a frontend module.
Enter your Cookiebot API number in the field to make the number available to the extension.
The script is now automatically added to the head-section of your website. Cookies are blocked and the banner is shown.

To add the cookie declaration add the frontend-modul at any position in your website's body. The module grabs the API number automatically.

To change your cookiebot settings go to your settings on the cookiebot website - this options are not provided by the extension

## Troubleshooting
If your API number is not accepted  try removing the following lines from contao-cookiebot-bundle/src/Resources/contao/classes/Validation.php
This Class checks if the cookiebot API is valid.
```bash
if(!preg_match('/^[0-9]{8}([\-][0-9]{4}){3}[\-][0-9]{12}$/', $varValue)) {
                                $objWidget->addError('The entered number is not a valid Cookiebot-Api.');
                        }
```

Authored by: [ETES GmbH](https://github.com/systemhaus/)
