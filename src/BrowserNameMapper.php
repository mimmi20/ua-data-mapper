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

        return match (mb_strtolower($browserInput)) {
            'unknown', 'other', 'default browser', 'generic', 'misc crawler', 'generic bot', 'http library', 'ios', 'playstation 3', 'playstation 4' => null,
            'ie', 'msie' => 'Internet Explorer',
            'iceweasel' => 'Iceweasel',
            'mobile safari', 'mobile safari/wkwebview', 'safari mobile', 'webview', 'mobile safari uiwebview' => 'Safari',
            'chrome mobile ios', 'chrome frame', 'chrome for ios', 'crios', 'chrome mobile', 'mobile chrome' => 'Chrome',
            'android', 'android browser' => 'Android Webkit',
            'googlebot' => 'Google Bot',
            'bingbot' => 'BingBot',
            'bingpreview' => 'Bing Preview',
            'jakarta commons-httpclient' => 'Jakarta Commons HttpClient',
            'adsbot-google' => 'AdsBot Google',
            'seokicks-robot' => 'SEOkicks Robot',
            'gomeza', 'gomezagent' => 'Gomez Site Monitor',
            'yandex.browser', 'yandex search browser' => 'Yandex Browser',
            'ie mobile' => 'IEMobile',
            'ovi browser', 'nokia/s40ovi', 'nokia ovi browser' => 'Nokia Proxy Browser',
            'firefox mobile', 'mobile firefox mobile', 'mobile firefox tablet', 'mobile firefox', 'firefox mobile for ios', 'firefox mobile ios', 'firefox for ios', 'firefox ios', 'fxios' => 'Firefox',
            'dolfin/jasmine webkit', 'dolphin' => 'Dolfin',
            'facebookexternalhit', 'facebook external hit', 'facebookbot' => 'FaceBook Bot',
            'facebook', 'facebook app' => 'Facebook App',
            'facebook messenger', 'facebook messenger app' => 'Facebook Messenger App',
            'instagram', 'instagram app' => 'Instagram App',
            'java' => 'Java Standard Library',
            'nokia web browser' => 'Nokia Browser',
            'applemail' => 'Apple Mail',
            'sistrix', 'sistrix crawler' => 'Sistrix Crawler',
            'blackberry webkit', 'blackberry browser', 'blackberry playbook browser' => 'BlackBerry',
            'microsoft outlook' => 'Outlook',
            'outlook express', 'microsoft outlook express' => 'Windows Live Mail',
            'mj12 bot' => 'MJ12bot',
            'mobile silk', 'amazon silk' => 'Silk',
            'genieo web filter' => 'Genieo Web Filter',
            'yahoo! slurp' => 'Slurp',
            'yandex bot' => 'YandexBot',
            'nutch-based bot', 'apache nutch' => 'Nutch',
            'baidu spider' => 'Baiduspider',
            'semrush bot' => 'SemrushBot',
            'python urllib' => 'Python-urllib',
            'mail.ru bot' => 'Mail.Ru',
            'exabot' => 'Exabot',
            'curl' => 'cURL',
            'pale moon (firefox variant)', 'pale moon' => 'PaleMoon',
            'opera next', 'opera mobile' => 'Opera',
            'opera mini for ios', 'opera mini ios' => 'Opera Mini for iOS',
            'yeti/naverbot' => 'NaverBot',
            'ahrefs bot' => 'AhrefsBot',
            'picsearch bot' => 'Picsearch Bot',
            'androiddownloadmanager' => 'Android Download Manager',
            'elinks' => 'ELinks',
            'whitehat aviator' => 'Aviator',
            'fake browser', 'fake ie', 'fake chrome', 'fake safari', 'fake firefox', 'fake android' => 'Fake Browser',
            'wdg html validator' => 'HTML Validator',
            'blekkobot' => 'BlekkoBot',
            'tweetmemebot', 'tweetmeme bot' => 'Tweetmeme Bot',
            'coremedia', 'applecoremedia' => 'CoreMedia',
            'mediapartners-google', 'google mediapartners' => 'AdSense Bot',
            'wordpress.com' => 'WordPress',
            'up.browser', 'au by kddi' => 'Openwave Mobile Browser',
            'qqbrowser' => 'QQ Browser',
            'wosbrowser', 'webkit/webos' => 'webOS Browser',
            'microsoft edge', 'spartan', 'edge mobile for ios', 'edge mobile', 'edge mobile for android' => 'Edge',
            'seomoz rogerbot' => 'roger bot',
            'airwatch browser', 'vmware airwatch' => 'AirWatch Browser',
            'google search app', 'google mobile app' => 'Google Search App',
            'microsoft office' => 'Microsoft Office',
            'office mobile', 'microsoft office mobile' => 'Microsoft Office Mobile',
            'word', 'microsoft office word' => 'Microsoft Word',
            'onenote', 'microsoft office onenote' => 'Microsoft OneNote',
            'microsoft bing', 'bing search' => 'Microsoft Bing',
            'via browser', 'via' => 'Via Browser',
            'f-secure safe', 'safe' => 'SAFE',
            'chrome webview' => 'Chrome WebView',
            'start', 'microsoft start' => 'Start',
            'kodi', 'kodi media center' => 'Kodi',
            'keplr', 'keplr wallet' => 'Keplr',
            'canopy - ai online safety app', 'canopy' => 'Canopy',
            'genspark', 'genspark ai workspace' => 'Genspark',
            'wechat', 'wechat app' => 'WeChat',
            'omshy vpn', 'omshy vpn - secure vpn proxy' => 'Omshy VPN',
            'dezor', 'dezor browser' => 'Dezor',
            'youtube', 'youtube app' => 'YouTube',
            'news home', 'news home: news home screen' => 'News Home',
            'podcasts', 'apple podcasts' => 'Podcasts',
            'twitter', 'x' => 'X',
            'crosswalk app', 'crosswalkapp' => 'Crosswalk App',
            'jelly browser', 'jelly' => 'Jelly Browser',
            'moyaapp', 'moya' => 'MoyaApp',
            'cast to tv+', 'castify' => 'Cast to TV+',
            'cici', 'cici - your ai assistant' => 'Cici',
            'veilig virusscanner', 'kpn veilig' => 'Veilig Virusscanner',
            'nytimes - crossword', 'the crossword' => 'NYTimes - Crossword',
            'npr', 'npr: national & local news' => 'NPR',
            'quora app', 'quora' => 'Quora App',
            'nintendo browser', 'nintendobrowser' => 'Nintendo Browser',
            'dorado wap browser', 'dorado' => 'Dorado WAP Browser',
            'podverse', 'podverse - podcast player' => 'Podverse',
            default => $browserInput,
        };
    }
}
