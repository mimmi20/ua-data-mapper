<?php
/**
 * Copyright (c) 2012-2014, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 * @link      https://github.com/mimmi20/BrowserDetectorModule
 */

namespace UaDataMapper;

/**
 * class with caching and update capabilities
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class BrowserNameMapper
{
    /**
     * mapps the browser
     *
     * @param string|null $browserInput
     *
     * @throws \UnexpectedValueException
     * @return string|null
     */
    public function mapBrowserName($browserInput)
    {
        if (null === $browserInput) {
            return null;
        }

        if (!is_string($browserInput)) {
            throw new \UnexpectedValueException(
                'a string is required as input in this function'
            );
        }

        $browserName = $browserInput;

        switch (strtolower($browserInput)) {
            case 'unknown':
            case 'other':
            case 'default browser':
            case 'generic':
                $browserName = null;
                break;
            case 'ie':
                $browserName = 'Internet Explorer';
                break;
            case 'iceweasel':
                $browserName = 'Iceweasel';
                break;
            case 'mobile safari':
                $browserName = 'Safari';
                break;
            case 'chrome mobile':
            case 'chrome mobile ios':
            case 'chrome frame':
                $browserName = 'Chrome';
                break;
            case 'android':
            case 'android browser':
                $browserName = 'Android Webkit';
                break;
            case 'googlebot':
                $browserName = 'Google Bot';
                break;
            case 'bingbot':
                $browserName = 'BingBot';
                break;
            case 'jakarta commons-httpclient':
                $browserName = 'Jakarta Commons HttpClient';
                break;
            case 'adsbot-google':
                $browserName = 'AdsBot Google';
                break;
            case 'seokicks-robot':
                $browserName = 'SEOkicks Robot';
                break;
            case 'gomeza':
            case 'gomezagent':
                $browserName = 'Gomez Site Monitor';
                break;
            case 'yandex.browser':
                $browserName = 'Yandex Browser';
                break;
            case 'ie mobile':
                $browserName = 'IEMobile';
                break;
            case 'ovi browser':
                $browserName = 'Nokia Proxy Browser';
                break;
            case 'firefox mobile':
            case 'mobile firefox mobile':
            case 'mobile firefox tablet':
            case 'mobile firefox':
                $browserName = 'Firefox';
                break;
            case 'dolfin/jasmine webkit':
            case 'dolphin':
                $browserName = 'Dolfin';
                break;
            case 'facebookexternalhit':
            case 'facebook external hit':
            case 'facebookbot':
                $browserName = 'FaceBook Bot';
                break;
            case 'java':
                $browserName = 'Java Standard Library';
                break;
            case 'nokia web browser':
                $browserName = 'Nokia Browser';
                break;
            case 'applemail':
                $browserName = 'Apple Mail';
                break;
            case 'sistrix':
                $browserName = 'Sistrix Crawler';
                break;
            case 'blackberry webkit':
            case 'blackberry browser':
                $browserName = 'BlackBerry';
                break;
            case 'microsoft outlook':
                $browserName = 'Outlook';
                break;
            case 'mj12 bot':
                $browserName = 'MJ12bot';
                break;
            case 'mobile silk':
            case 'amazon silk':
                $browserName = 'Silk';
                break;
            case 'genieo web filter':
                $browserName = 'Genieo Web Filter';
                break;
            case 'yahoo! slurp':
                $browserName = 'Slurp';
                break;
            case 'yandex bot':
                $browserName = 'YandexBot';
                break;
            case 'nutch-based bot':
                $browserName = 'Nutch';
                break;
            case 'baidu spider':
                $browserName = 'Baiduspider';
                break;
            case 'semrush bot':
                $browserName = 'SemrushBot';
                break;
            case 'python urllib':
                $browserName = 'Python-urllib';
                break;
            case 'mail.ru bot':
                $browserName = 'Mail.Ru';
                break;
            case 'nokia/s40ovi':
            case 'nokia ovi browser':
                $browserName = 'Nokia Proxy Browser';
                break;
            case 'sistrix crawler':
                $browserName = 'Sistrix Crawler';
                break;
            case 'exabot':
                $browserName = 'Exabot';
                break;
            case 'curl':
                $browserName = 'cURL';
                break;
            case 'pale moon (firefox variant)':
            case 'pale moon':
                $browserName = 'PaleMoon';
                break;
            case 'opera next':
                $browserName = 'Opera';
                break;
            case 'yeti/naverbot':
                $browserName = 'NaverBot';
                break;
            case 'ahrefs bot':
                $browserName = 'AhrefsBot';
                break;
            case 'picsearch bot':
                $browserName = 'Picsearch Bot';
                break;
            case 'androiddownloadmanager':
                $browserName = 'Android Download Manager';
                break;
            case 'elinks':
                $browserName = 'ELinks';
                break;
            case 'whitehat aviator':
                $browserName = 'Aviator';
                break;
            case 'fake browser':
            case 'fake ie':
            case 'fake chrome':
            case 'fake safari':
            case 'fake firefox':
                $browserName = 'Fake Browser';
                break;
            default:
                // nothing to do here
                break;
        }

        return $browserName;
    }
}
