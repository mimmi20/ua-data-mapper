<?php
/**
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
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
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetectorModule
 */

namespace UaDataMapper;

use Psr\Cache\CacheItemPoolInterface;
use UaBrowserType\TypeLoader;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class BrowserTypeMapper
{
    /**
     * maps the browser type
     *
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     * @param string                            $browserType
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function mapBrowserType(CacheItemPoolInterface $cache, $browserType)
    {
        switch (strtolower($browserType)) {
            case 'browser':
            case 'mobile browser':
                $typeKey = 'browser';
                break;
            case 'bot':
            case 'robot':
            case 'bot/crawler':
            case 'library':
                $typeKey = 'bot';
                break;
            case 'emailclient':
            case 'email client':
                $typeKey = 'email-client';
                break;
            case 'pim':
                $typeKey = 'pim';
                break;
            case 'feedreader':
            case 'feed reader':
                $typeKey = 'feed-reader';
                break;
            case 'multimediaplayer':
            case 'mediaplayer':
            case 'multimedia player':
                $typeKey = 'multimedia-player';
                break;
            case 'offlinebrowser':
            case 'offline browser':
                $typeKey = 'offline-browser';
                break;
            case 'useragentanonymizer':
            case 'useragent anonymizer':
                $typeKey = 'useragent-anonymizer';
                break;
            case 'wapbrowser':
            case 'wap browser':
                $typeKey = 'wap-browser';
                break;
            case 'application':
            case 'mobile app':
                $typeKey = 'application';
                break;
            case 'tool':
                $typeKey = 'tool';
                break;
            default:
                $typeKey = 'unknown';
                break;
        }

        return (new TypeLoader($cache))->load($typeKey);
    }
}
