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

use UaDeviceType\Bot;
use UaDeviceType\Desktop;
use UaDeviceType\DigitalCamera;
use UaDeviceType\FonePad;
use UaDeviceType\MobileDevice;
use UaDeviceType\MobilePhone;
use UaDeviceType\Tablet;
use UaDeviceType\Tv;
use UaDeviceType\Unknown;

/**
 * class with caching and update capabilities
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class DeviceTypeMapper
{
    /**
     * maps the name of a device
     *
     * @param string $deviceType
     *
     * @return \UaDeviceType\TypeInterface
     */
    public function mapDeviceType($deviceType)
    {
        switch (strtolower($deviceType)) {
            case 'smart-tv':
            case 'tv device':
                $deviceType = new Tv();
                break;
            case 'desktop':
                $deviceType = new Desktop();
                break;
            case 'fonepad':
                $deviceType = new FonePad();
                break;
            case 'tablet':
                $deviceType = new Tablet();
                break;
            case 'mobile device':
                $deviceType = new MobileDevice();
                break;
            case 'robot':
                $deviceType = new Bot();
                break;
            case 'mobile phone':
            case 'smartphone':
            case 'feature phone':
                $deviceType = new MobilePhone();
                break;
            case 'digital camera':
                $deviceType = new DigitalCamera();
                break;
            default:
                $deviceType = new Unknown();
                break;
        }

        return $deviceType;
    }
}
