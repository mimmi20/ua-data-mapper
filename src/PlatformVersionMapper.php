<?php
/**
 * Copyright (c) 2015, 2016, Thomas Mueller <mimmi20@live.de>
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
 * @copyright 2015, 2016 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetectorModule
 */

namespace UaDataMapper;

use BrowserDetector\Version\Version;
use BrowserDetector\Version\VersionFactory;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015, 2016 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class PlatformVersionMapper
{
    /**
     * maps the version of the operating system
     *
     * @param string $osVersion
     * @param string $osName
     *
     * @return \BrowserDetector\Version\Version
     */
    public function mapOsVersion($osVersion, $osName = null)
    {
        switch (strtolower($osVersion)) {
            case '':
            case 'unknown':
            case 'other':
                return new Version(0);
                break;
            case 'server 2003':
                return new Version(2003);
                break;
            case 'nt 5.1':
                return VersionFactory::set('XP');
                break;
            case 'nt 6.1':
                return new Version(7);
                break;
            case 'nt 6.2':
                return new Version(8);
                break;
            case 'nt 6.3':
                return new Version(8, 1);
                break;
            default:
                // nothing to do here
                break;
        }

        switch (strtolower($osName)) {
            case '':
            case 'unknown':
            case 'other':
                return new Version(0);
                break;
            case 'winxp':
            case 'windows xp':
            case 'nt 5.1':
                return VersionFactory::set('XP');
                break;
            case 'winvista':
            case 'windows vista':
            case 'nt 6.0':
                return VersionFactory::set('Vista');
                break;
            case 'win7':
            case 'winphone7':
            case 'windows phone 7':
            case 'windows 7':
            case 'nt 6.1':
                return new Version(7);
                break;
            case 'winphone7.5':
            case 'windows phone 7.5':
                return new Version(7, 5);
                break;
            case 'win8':
            case 'winrt8':
            case 'winphone8':
            case 'windows phone 8':
            case 'windows 8':
            case 'nt 6.2':
                return new Version(8);
                break;
            case 'win8.1':
            case 'winrt8.1':
            case 'winphone8.1':
            case 'windows phone 8.1':
            case 'windows 8.1':
            case 'nt 6.3':
                return new Version(8, 1);
                break;
            case 'win9':
                return new Version(9);
                break;
            case 'win10':
            case 'windows 10':
                return new Version(10);
                break;
            case 'win2000':
            case 'windows 2000':
            case 'nt 5.0':
                return new Version(2000);
                break;
            case 'win2003':
                return new Version(2003);
                break;
            case 'win98':
            case 'windows 98':
                return new Version(98);
                break;
            case 'win95':
                return new Version(95);
                break;
            case 'winnt':
                return VersionFactory::set('NT');
                break;
            case 'winme':
                return VersionFactory::set('ME');
                break;
            case 'win31':
                return new Version(3, 1);
                break;
            case 'win32':
                return new Version(0);
                break;
            case 'yosemite 10.10':
                return new Version(10, 10);
                break;
            case 'mavericks 10.9':
                return new Version(10, 9);
                break;
            default:
                // nothing to do here
                break;
        }

        return VersionFactory::set($osVersion);
    }
}
