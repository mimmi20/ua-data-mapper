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

use UaDeviceType\TypeLoader;
use Psr\Cache\CacheItemPoolInterface;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class DeviceTypeMapper
{
    /**
     * maps the name of a device
     *
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     * @param string                            $deviceType
     *
     * @return \UaDeviceType\TypeInterface
     */
    public function mapDeviceType(CacheItemPoolInterface $cache, $deviceType)
    {
        switch (strtolower($deviceType)) {
            case 'smart-tv':
            case 'tv device':
                $typeKey = 'tv';
                break;
            case 'desktop':
                $typeKey = 'desktop';
                break;
            case 'fonepad':
                $typeKey = 'fone-pad';
                break;
            case 'tablet':
                $typeKey = 'tablet';
                break;
            case 'mobile device':
                $typeKey = 'mobile-device';
                break;
            case 'mobile phone':
                $typeKey = 'mobile-phone';
                break;
            case 'smartphone':
                $typeKey = 'smartphone';
                break;
            case 'feature phone':
                $typeKey = 'feature-phone';
                break;
            case 'digital camera':
                $typeKey = 'digital-camera';
                break;
            default:
                $typeKey = 'unknown';
                break;
        }

        return (new TypeLoader($cache))->load($typeKey);
    }
}
