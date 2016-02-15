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
class PlatformNameMapper
{
    /**
     * maps the name of the operating system
     *
     * @param string $osName
     *
     * @return string|null
     */
    public function mapOsName($osName)
    {
        switch (strtolower($osName)) {
            case '':
            case 'unknown':
            case 'other':
                $osName = null;
                break;
            case 'winxp':
            case 'win7':
            case 'win8':
            case 'win8.1':
            case 'win9':
            case 'win10':
            case 'winvista':
            case 'win2000':
            case 'win2003':
            case 'win98':
            case 'win95':
            case 'win31':
            case 'winnt':
            case 'winme':
            case 'windows xp':
            case 'windows vista':
            case 'windows 7':
            case 'windows 8':
            case 'windows 8.1':
            case 'windows server':
                $osName = 'Windows';
                break;
            case 'winphone7':
            case 'winphone7.5':
            case 'winphone8':
            case 'winphone8.1':
            case 'windows phone':
            case 'windows phone 7':
                $osName = 'Windows Phone OS';
                break;
            case 'winrt8':
            case 'winrt8.1':
                $osName = 'Windows RT';
                break;
            case 'winmobile':
                $osName = 'Windows Mobile OS';
                break;
            case 'wince':
                $osName = 'Windows CE';
                break;
            case 'blackberry os':
                $osName = 'RIM OS';
                break;
            case 'mac':
            case 'macosx':
            case 'os x':
            case 'mac osx':
                $osName = 'Mac OS X';
                break;
            case 'jvm':
            case 'java':
                $osName = 'Java';
                break;
            case 'bada os':
                $osName = 'Bada';
                break;
            case 'symbianos':
            case 'nokia series 40':
            case 'symbian os series 40':
                $osName = 'Symbian OS';
                break;
            case 'gnu/linux':
                $osName = 'Linux';
                break;
            case 'chrome os':
                $osName = 'ChromeOS';
                break;
            case 'mint':
                $osName = 'Linux Mint';
                break;
            default:
                // nothing to do here
                break;
        }

        return $osName;
    }
}
