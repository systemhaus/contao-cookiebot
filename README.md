# Contao Cookiebot

This extension for the open source CMS Contao integrates the GDPR compliant
cookie consent functionality of [Cookiebot](https://www.cookiebot.com/en/)
into the website frontend.

![Screenshot of Cookiebot in action](help/cookiebot-screenshot.png?raw=true "An example for the Cookiebot disclaimer bar in a website")

**Caution:** Cookiebot is a paid solution. A free plan for small websites is
available, but terms can change any time. ETES is not responsible for the
Cookiebot service, but only offers this extension as a contribution to the
community.

## Prerequisites

For using Cookiebot in any website, an API key is required. You can register
yourself [directly with Cookiebot](https://manage.cookiebot.com/de/signup) or
choose a [reseller](https://www.cookiebot.com/en/resellers/).  
**Special:** ETES will give a percentage of the license fee to the
[Contao Association](https://association.contao.org/) for every user buying the
Cookiebot subscription via us. [More info](https://www.etes.de/cookiebot).

## Installation

This extension can be installed using the Contao Manager or composer. Simply
search for "Cookiebot" or use the command line

```bash
composer require systemhaus/contao-cookiebot
```

As the extension includes new database fields, you need to update the database
via the Contao install tool afterwards.

## How it works

The extension loads the Cookiebot JS first place in your website's source code.
This scripts prevents the browser from setting any cookies before user consent
has been granted. By doing this, it complies with EU legislation (GDPR) and
court rulings in the matter of cookies.

Secondly, a bar like the one in the screenshot on top is displayed across the
content of the website. Colours and texts of this bar can be customized online.

The bar contains an interactive choice dialogue for different kinds of cookies
used on your website. Cookiebot automatically detects all kinds of cookies and
classifies them. For each cookie, the user can view a description.

After the user has made his choice, the script allows or blocks the cookies
accordingly, the bar disappears.

For later changes to the user's choice, a similar form should be included in
privacy page of your website. The extension provides a frontend module for this
purpose which can be used in any article.

## Configuring the extension

For each of your websites (root pages in the page structure) you can enable
or disable Cookiebot separately. Cookiebot requires an API key to function.
You can enter this key in the page settings.

If the key is valid, the Cookiebot bar is automatically shown in the frontend.
Errors with your key would show up in the Javascript console of your browser.

If your website contains a legal or privacy page, you can include the Cookiebot
frontend module there. Simply create a new frontend module and insert it into
the article of your choice. The frontend module should only be included in a
page layout if you know what you're doing!

If you want to perform cookie blocking manually, you can disable automatic cookie blocking in the page settings.
Please read the [implementation guide of Cookiebot](https://www.cookiebot.com/goto/manual-implementation)
on how to manually mark cookie setting scripts and correctly implement Cookiebot on your website.

## Support

Authored by: [ETES GmbH](https://github.com/systemhaus/) and community
contributors. Thanks a lot!  
More information on [our website](https://www.etes.de/cookiebot).  
For bugs, please create an [issue in the tracker](https://github.com/systemhaus/contao-cookiebot/issues).
