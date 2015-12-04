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
class DeviceNameMapper
{
    /**
     * maps the name of a device
     *
     * @param string $deviceName
     *
     * @return string|null
     */
    public function mapDeviceName($deviceName)
    {
        switch (strtolower($deviceName)) {
            case '':
            case 'pc':
            case 'unknown':
            case 'other':
                $deviceName = null;
                break;
            case 'android':
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
            case 'mini 7':
            case 'windows mobile 6.5':
            case 'windows mobile 7':
            case 'windows mobile 7.5':
            case 'windows phone 7':
            case 'windows phone 7.5':
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
            case 'firefox os':
                $deviceName = 'general Mobile Device';
                break;
            case 'spider':
                $deviceName = 'general Bot';
                break;
            // Motorola
            case 'motomz616':
                $deviceName = 'MZ616';
                break;
            case 'motoxt610':
                $deviceName = 'XT610';
                break;
            case 'motxt912b':
                $deviceName = 'XT912B';
                break;
            // LG
            case 'lg/c550/v1.0':
                $deviceName = 'C550';
                break;
            // Samsung
            case 'gt s8500':
                $deviceName = 'GT-S8500';
                break;
            case 'gp-p6810':
                $deviceName = 'GT-P6810';
                break;
            case 'gt-i8350':
                $deviceName = 'GT-I8350';
                break;
            case 'gt-i9100':
                $deviceName = 'GT-I9100';
                break;
            case 'gt-i9300':
            case 'samsung gt-i9300/i9300xxdlih':
                $deviceName = 'GT-I9300';
                break;
            case 'gt-i5500':
                $deviceName = 'GT-I5500';
                break;
            case 'gt i7500':
                $deviceName = 'GT-I7500';
                break;
            case 'gt-p5110':
                $deviceName = 'GT-P5110';
                break;
            case 'gt s5620':
                $deviceName = 'GT-S5620';
                break;
            case 'sch-i699':
                $deviceName = 'SCH-I699';
                break;
            case 'sgh-i957':
                $deviceName = 'SGH-I957';
                break;
            case 'sgh-i900v':
                $deviceName = 'SGH-I900V';
                break;
            case 'sgh-i917':
                $deviceName = 'SGH-I917';
                break;
            case 'sgh i900':
                $deviceName = 'SGH-I900';
                break;
            case 'sph-930':
                $deviceName = 'SPH-M930';
                break;
            // Acer
            case 'acer e310':
                $deviceName = 'E310';
                break;
            case 'acer e320':
                $deviceName = 'E320';
                break;
            // HTC
            case 'sensationxe beats z715e':
                $deviceName = 'Sensation XE Beats Z715e';
                break;
            case 's510b':
                $deviceName = 'S510B';
                break;
            case 'htc desire sv':
                $deviceName = 'Desire SV';
                break;
            // Asus
            case 'asus-padfone':
                $deviceName = 'PadFone';
                break;
            case 'memopad smart 10':
            case 'memo pad smart 10':
                $deviceName = 'MeMO Pad Smart 10';
                break;
            // Creative
            case 'creative ziio7':
                $deviceName = 'ZiiO7';
                break;
            // HP
            case 'touchpad':
                $deviceName = 'Touchpad';
                break;
            // Huawei
            case 'u8800':
                $deviceName = 'U8800';
                break;
            // Amazon
            case 'd01400':
                $deviceName = 'Kindle';
                break;
            // Nokia
            case 'nokia asha 201':
                $deviceName = 'Asha 201';
                break;
            case 'nokia asha 300':
            case 'asha 300':
                $deviceName = '300';
                break;
            case '530':
                $deviceName = 'Lumia 530';
                break;
            // Medion
            case 'p9514':
                $deviceName = 'LifeTab P9514';
                break;
            case 'lifetab s9512':
                $deviceName = 'LifeTab S9512';
                break;
            case 'e10312 (md 98486)':
                $deviceName = 'LifeTab E10312';
                break;
            case 'i9506':
                $deviceName = 'GT-I9506';
                break;
            case 'lifetab_e10320':
                $deviceName = 'E10320';
                break;
            case 'xperia sgp312':
                $deviceName = 'SGP312';
                break;
            default:
                // nothing to do here
                break;
        }

        return $deviceName;
    }
}