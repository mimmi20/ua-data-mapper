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

use UaBrowserType\Application;
use UaBrowserType\Bot;
use UaBrowserType\Browser;
use UaBrowserType\EmailClient;
use UaBrowserType\FeedReader;
use UaBrowserType\MultimediaPlayer;
use UaBrowserType\OfflineBrowser;
use UaBrowserType\Unknown;
use UaBrowserType\UseragentAnonymizer;
use UaBrowserType\WapBrowser;

/**
 * class with caching and update capabilities
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class BrowserTypeMapper
{
    /**
     * maps the browser type
     *
     * @param string $browserType
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function mapBrowserType($browserType)
    {
        switch (strtolower($browserType)) {
            case 'browser':
            case 'mobile browser':
                $browserType = new Browser();
                break;
            case 'bot':
            case 'robot':
            case 'bot/crawler':
            case 'library':
                $browserType = new Bot();
                break;
            case 'emailclient':
            case 'email client':
            case 'pim':
                $browserType = new EmailClient();
                break;
            case 'feedreader':
            case 'feed reader':
                $browserType = new FeedReader();
                break;
            case 'multimediaplayer':
            case 'mediaplayer':
            case 'multimedia player':
                $browserType = new MultimediaPlayer();
                break;
            case 'offlinebrowser':
            case 'offline browser':
                $browserType = new OfflineBrowser();
                break;
            case 'useragentanonymizer':
            case 'useragent anonymizer':
                $browserType = new UseragentAnonymizer();
                break;
            case 'wapbrowser':
            case 'wap browser':
                $browserType = new WapBrowser();
                break;
            case 'application':
            case 'mobile app':
                $browserType = new Application();
                break;
            default:
                $browserType = new Unknown();
                break;
        }

        return $browserType;
    }
}
