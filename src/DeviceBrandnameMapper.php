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

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class DeviceBrandnameMapper
{
    /**
     * maps the brand name of a device
     *
     * @param string $brandName
     *
     * @return string|null
     */
    public function mapDeviceBrandName($brandName)
    {
        switch (strtolower($brandName)) {
            case '':
            case 'unknown':
            case 'other':
            case 'various':
                $brandName = null;
                break;
            case 'htc corporation':
            case 'ht':
                $brandName = 'HTC';
                break;
            case 'au':
                $brandName = 'Asus';
                break;
            case 'sa':
                $brandName = 'Samsung';
                break;
            case 'so':
                $brandName = 'Sony';
                break;
            case 'rm':
                $brandName = 'BlackBerry';
                break;
            case 'nk':
                $brandName = 'Nokia';
                break;
            case 'ac':
                $brandName = 'Acer';
                break;
            case 'go':
                $brandName = 'Google';
                break;
            case 'le':
            case 'md':
                $brandName = 'Lenovo';
                break;
            case 'mr':
                $brandName = 'Motorola';
                break;
            case 'kn':
                $brandName = 'Amazon';
                break;
            case 'hu':
                $brandName = 'Huawei';
                break;
            case 'ni':
                $brandName = 'Nintendo';
                break;
            case 'ap':
                $brandName = 'Apple';
                break;
            case 'al':
                $brandName = 'Alcatel';
                break;
            case 'mb':
                $brandName = 'Mobistel';
                break;
            case 'wi':
                $brandName = 'Wiko';
                break;
            case 'xi':
                $brandName = 'Xiaomi';
                break;
            case 'ar':
                $brandName = 'Archos';
                break;
            case 'kz':
                $brandName = 'KAZAM';
                break;
            case 'ms':
                $brandName = 'Microsoft';
                break;
            case 'mi':
                $brandName = 'Micromax';
                break;
            default:
                break;
        }

        return $brandName;
    }

    /**
     * maps the brand name of a device from the device name
     *
     * @param string|null $deviceName
     *
     * @return string|null
     */
    public function mapDeviceName($deviceName)
    {
        $brandName = null;

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
            case 'nokia unrecognized ovi browser':
                $brandName = null;
                break;
            // Medion
            case 'p9514':
            case 'lifetab p9514':
            case 'lifetab s9512':
                $brandName = 'Medion';
                break;
            // HTC
            case 'htc desire sv':
                $brandName = 'HTC';
                break;
            // Apple
            case 'ipad':
            case 'iphone':
                $brandName = 'Apple';
                break;
            default:
                // nothing to do here
                break;
        }

        return $brandName;
    }
}
