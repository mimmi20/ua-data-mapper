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

use UaResult\Version;

/**
 * class with caching and update capabilities
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
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
     * @return \UaResult\Version
     */
    public function mapOsVersion($osVersion, $osName = null)
    {
        $version = new Version();
        $version->setMode(
            Version::COMPLETE | Version::IGNORE_MINOR_IF_EMPTY | Version::IGNORE_MICRO_IF_EMPTY
        );

        switch (strtolower($osVersion)) {
            case '':
            case 'unknown':
            case 'other':
                $osVersion = null;
                break;
            case 'server 2003':
                $osVersion = 'XP';
                return $version->setVersion($osVersion);
                break;
            default:
                // nothing to do here
                break;
        }

        switch (strtolower($osName)) {
            case '':
            case 'unknown':
            case 'other':
                $osVersion = null;
                break;
            case 'winxp':
                $osVersion = 'XP';
                break;
            case 'win7':
            case 'winphone7':
            case 'windows phone 7':
            case 'nt 6.1':
                $osVersion = '7';
                break;
            case 'winphone7.5':
            case 'windows phone 7.5':
                $osVersion = '7.5';
                break;
            case 'win8':
            case 'winrt8':
            case 'winphone8':
            case 'windows phone 8':
            case 'nt 6.2':
                $osVersion = '8';
                break;
            case 'win8.1':
            case 'winrt8.1':
            case 'winphone8.1':
            case 'windows phone 8.1':
            case 'nt 6.3':
                $osVersion = '8.1';
                break;
            case 'win9':
                $osVersion = '9';
                break;
            case 'win10':
                $osVersion = '10';
                break;
            case 'winvista':
                $osVersion = 'Vista';
                break;
            case 'win2000':
                $osVersion = '2000';
                break;
            case 'win2003':
                $osVersion = '2003';
                break;
            case 'win98':
                $osVersion = '98';
                break;
            case 'win95':
                $osVersion = '95';
                break;
            case 'winnt':
                $osVersion = 'NT';
                break;
            case 'winme':
                $osVersion = 'ME';
                break;
            case 'win31':
                $osVersion = '3.1';
                break;
            case 'yosemite 10.10':
                $osVersion = '10.10';
                break;
            case 'mavericks 10.9':
                $osVersion = '10.9';
                break;
            default:
                // nothing to do here
                break;
        }

        return $version->setVersion($osVersion);
    }
}
