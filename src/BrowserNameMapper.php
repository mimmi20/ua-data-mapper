<?php

/**
 * This file is part of the mimmi20/ua-data-mapper package.
 *
 * Copyright (c) 2015-2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaDataMapper;

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class BrowserNameMapper
{
    /**
     * mapps the browser
     *
     * @throws void
     *
     * @api
     */
    public function mapBrowserName(string | null $browserInput): string | null
    {
        if ($browserInput === null) {
            return null;
        }

        switch (mb_strtolower($browserInput)) {
            case 'unknown':
            case 'other':
            case 'default browser':
            case 'generic':
            case 'misc crawler':
            case 'generic bot':
            case 'http library':
            case 'ios':
            case 'playstation 3':
            case 'playstation 4':
                return null;
            case 'ie':
            case 'msie':
                return 'Internet Explorer';
            case 'iceweasel':
                return 'Iceweasel';
            case 'mobile safari':
            case 'mobile safari/wkwebview':
            case 'safari mobile':
            case 'webview':
                return 'Safari';
            case 'chrome mobile':
            case 'chrome mobile ios':
            case 'chrome frame':
            case 'chrome for ios':
            case 'mobile chrome':
            case 'crios':
                return 'Chrome';
            case 'android':
            case 'android browser':
                return 'Android Webkit';
            case 'googlebot':
                return 'Google Bot';
            case 'bingbot':
                return 'BingBot';
            case 'bingpreview':
                return 'Bing Preview';
            case 'jakarta commons-httpclient':
                return 'Jakarta Commons HttpClient';
            case 'adsbot-google':
                return 'AdsBot Google';
            case 'seokicks-robot':
                return 'SEOkicks Robot';
            case 'gomeza':
            case 'gomezagent':
                return 'Gomez Site Monitor';
            case 'yandex.browser':
                return 'Yandex Browser';
            case 'ie mobile':
                return 'IEMobile';
            case 'ovi browser':
            case 'nokia/s40ovi':
            case 'nokia ovi browser':
                return 'Nokia Proxy Browser';
            case 'firefox mobile':
            case 'mobile firefox mobile':
            case 'mobile firefox tablet':
            case 'mobile firefox':
            case 'firefox mobile for ios':
            case 'firefox mobile ios':
            case 'firefox for ios':
            case 'firefox ios':
            case 'fxios':
                return 'Firefox';
            case 'dolfin/jasmine webkit':
            case 'dolphin':
                return 'Dolfin';
            case 'facebookexternalhit':
            case 'facebook external hit':
            case 'facebookbot':
                return 'FaceBook Bot';
            case 'java':
                return 'Java Standard Library';
            case 'nokia web browser':
                return 'Nokia Browser';
            case 'applemail':
                return 'Apple Mail';
            case 'sistrix':
            case 'sistrix crawler':
                return 'Sistrix Crawler';
            case 'blackberry webkit':
            case 'blackberry browser':
                return 'BlackBerry';
            case 'microsoft outlook':
                return 'Outlook';
            case 'outlook express':
            case 'microsoft outlook express':
                return 'Windows Live Mail';
            case 'microsoft office':
                return 'Office';
            case 'mj12 bot':
                return 'MJ12bot';
            case 'mobile silk':
            case 'amazon silk':
                return 'Silk';
            case 'genieo web filter':
                return 'Genieo Web Filter';
            case 'yahoo! slurp':
                return 'Slurp';
            case 'yandex bot':
                return 'YandexBot';
            case 'nutch-based bot':
            case 'apache nutch':
                return 'Nutch';
            case 'baidu spider':
                return 'Baiduspider';
            case 'semrush bot':
                return 'SemrushBot';
            case 'python urllib':
                return 'Python-urllib';
            case 'mail.ru bot':
                return 'Mail.Ru';
            case 'exabot':
                return 'Exabot';
            case 'curl':
                return 'cURL';
            case 'pale moon (firefox variant)':
            case 'pale moon':
                return 'PaleMoon';
            case 'opera next':
                return 'Opera';
            case 'yeti/naverbot':
                return 'NaverBot';
            case 'ahrefs bot':
                return 'AhrefsBot';
            case 'picsearch bot':
                return 'Picsearch Bot';
            case 'androiddownloadmanager':
                return 'Android Download Manager';
            case 'elinks':
                return 'ELinks';
            case 'whitehat aviator':
                return 'Aviator';
            case 'fake browser':
            case 'fake ie':
            case 'fake chrome':
            case 'fake safari':
            case 'fake firefox':
            case 'fake android':
                return 'Fake Browser';
            case 'wdg html validator':
                return 'HTML Validator';
            case 'blekkobot':
                return 'BlekkoBot';
            case 'tweetmemebot':
            case 'tweetmeme bot':
                return 'Tweetmeme Bot';
            case 'coremedia':
            case 'applecoremedia':
                return 'CoreMedia';
            case 'mediapartners-google':
            case 'google mediapartners':
                return 'AdSense Bot';
            case 'wordpress.com':
                return 'WordPress';
            case 'up.browser':
            case 'au by kddi':
                return 'Openwave Mobile Browser';
            case 'qqbrowser':
                return 'QQ Browser';
            case 'wosbrowser':
            case 'webkit/webos':
                return 'webOS Browser';
            case 'microsoft edge':
            case 'spartan':
                return 'Edge';
            case 'seomoz rogerbot':
                return 'roger bot';
            default:
                return $browserInput;
        }
    }
}
