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
class DeviceMarketingnameMapper
{
    /**
     * maps the marketing name of a device
     *
     * @param string $marketingName
     *
     * @return string|null
     */
    public function mapDeviceMarketingName($marketingName)
    {
        switch (strtolower($marketingName)) {
            case '':
            case 'unknown':
            case 'other':
                $marketingName = null;
                break;
            case 'lg optimus chat':
                $marketingName = 'Optimus Chat';
                break;
            case 't mobile move balance':
                $marketingName = 'T-Mobile Move Balance';
                break;
            case 'xperia arc so-01c for docomo':
                $marketingName = 'Xperia Arc SO-01C for DoCoMo';
                break;
            case 'galaxy sii':
                $marketingName = 'Galaxy S II';
                break;
            case 'galaxy sii plus':
                $marketingName = 'Galaxy S II Plus';
                break;
            case 'galaxy siii':
            case 'galaxy s3':
                $marketingName = 'Galaxy S III';
                break;
            case 'galaxy s3 lte international':
                $marketingName = 'Galaxy S III LTE International';
                break;
            case 'lifetab':
                $marketingName = 'LifeTab';
                break;
            case 'galaxy sii epic 4g touch':
                $marketingName = 'Galaxy S II Epic 4G Touch';
                break;
            case 'prestigio multipad':
                $marketingName = 'Multipad';
                break;
            case 'samsung galaxy tab 7.0 plus':
                $marketingName = 'Galaxy Tab 7.0 Plus';
                break;
            case 'one touch m\'pop':
                $marketingName = 'One Touch MPop';
                break;
            case 'people\'s tablet':
                $marketingName = 'Peoples Tablet';
                break;
            case 'lumia 530 dual sim':
                $marketingName = 'Lumia 530';
                break;
            case 'droid razr i':
                $marketingName = 'RAZR i';
                break;
            case 'nokia asha 300':
            case '300':
                $marketingName = 'Asha 300';
                break;
            case 'galaxy tabpro 10.1" wifi':
                $marketingName = 'Galaxy Tab Pro 10.1 WiFi';
                break;
            case 'galaxy tab 3 10.1" wifi':
                $marketingName = 'Galaxy Tab 3 10.1 3G WiFi';
                break;
            case 'galaxy tab 4 10.1" wifi':
                $marketingName = 'Galaxy Tab 4 10.1 WiFi';
                break;
            case 'galaxy tab 4 10.1" lte':
                $marketingName = 'Galaxy Tab 4 10.1 LTE';
                break;
            case 'galaxy tab 2 10.1" wifi':
                $marketingName = 'Galaxy Tab 2 10.1 WiFi';
                break;
            case 'galaxy s5':
                $marketingName = 'Galaxy S5';
                break;
            case 'gt-i9515':
                $marketingName = 'Galaxy S4';
                break;
            case 'galaxy tab 3 10.1"':
                $marketingName = 'Galaxy Tab 3 10.1 3G';
                break;
            case 'kindle fire hdx 7" wifi':
                $marketingName = 'Kindle Fire HDX 7 WiFi';
                break;
            case 'ideatab b8080-f':
                $marketingName = 'Yoga Tab 10 HD+';
                break;
            case 'galaxy note 4':
                $marketingName = 'Galaxy Note 4';
                break;
            case 'b8000-f':
                $marketingName = 'Yoga B8000-F';
                break;
            case 'iconia a3':
                $marketingName = 'Iconia Tab A3';
                break;
            case 'galaxy trend lite':
                $marketingName = 'Galaxy Trend Lite';
                break;
            case 'one touch 6030x':
                $marketingName = 'One Touch Idol';
                break;
            case 'one mini2':
                $marketingName = 'One Mini 2';
                break;
            case 's iii mini':
                $marketingName = 'Galaxy S III Mini';
                break;
            default:
                // nothing to do here
                break;
        }

        return $marketingName;
    }

    /**
     * maps the marketing name of a device from the device name
     *
     * @param string|null $deviceName
     *
     * @return string|null
     */
    public function mapDeviceName($deviceName)
    {
        $marketingName = null;

        switch (strtolower($deviceName)) {
            case '':
            case 'unknown':
            case 'other':
            case 'various':
            case 'android 1.6':
            case 'android 2.0':
            case 'android 2.1':
            case 'android 2.2':
            case 'android 2.3':
            case 'android 3.0':
            case 'android 3.1':
            case 'android 3.2':
            case 'android 4.0':
            case 'android 4.1':
            case 'android 4.2':
            case 'android 4.3':
            case 'android 4.4':
            case 'android 5.0':
            case 'android 2.2 tablet':
            case 'android 4 tablet':
            case 'android 4.1 tablet':
            case 'android 4.2 tablet':
            case 'android 4.3 tablet':
            case 'android 4.4 tablet':
            case 'android 5.0 tablet':
            case 'disguised as macintosh':
            case 'mini 1':
            case 'mini 4':
            case 'mini 5':
            case 'windows mobile 6.5':
            case 'windows mobile 7':
            case 'windows mobile 7.5':
            case 'windows phone 7':
            case 'windows phone 8':
            case 'fennec tablet':
            case 'tablet on android':
            case 'fennec':
            case 'opera for series 60':
            case 'opera mini for s60':
            case 'windows mobile (opera)':
            case 'mobi for android':
            case 'nokia unrecognized ovi browser':
            case 'mozilla firefox for android':
            case 'firefox for android tablet':
            case 'firefox for android':
                $marketingName = null;
                break;
            // Acer
            case 'acer e320':
                $marketingName = 'Liquid Express';
                break;
            // HP
            case 'touchpad':
                $marketingName = 'Touchpad';
                break;
            // Medion
            case 'p9514':
            case 'lifetab p9514':
                $marketingName = 'LifeTab P9514';
                break;
            case 'lifetab s9512':
                $marketingName = 'LifeTab S9512';
                break;
            // HTC
            case 'htc desire sv':
                $marketingName = 'Desire SV';
                break;
            // Apple
            case 'ipad':
                $marketingName = 'iPad';
                break;
            case 'iphone':
                $marketingName = 'iPhone';
                break;
            default:
                // nothing to do here
                break;
        }

        return $marketingName;
    }
}