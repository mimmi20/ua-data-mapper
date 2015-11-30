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

use BrowserDetector\Detector\Type\Browser as BrowserType;
use BrowserDetector\Detector\Type\Device as DeviceType;
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
class InputMapper
{
    /**
     * mapps the browser
     *
     * @param string $browserInput
     *
     * @throws \UnexpectedValueException
     * @return string
     */
    public function mapBrowserName($browserInput)
    {
        return (new BrowserNameMapper())->mapBrowserName($browserInput);
    }

    /**
     * maps the browser version
     *
     * @param string $browserVersion
     * @param string $browserName
     *
     * @return \UaResult\Version
     */
    public function mapBrowserVersion($browserVersion, $browserName = null)
    {
        return (new BrowserVersionMapper())->mapBrowserVersion($browserVersion, $browserName);
    }

    /**
     * maps the browser type
     *
     * @param string $browserType
     * @param string $browserName
     *
     * @return \BrowserDetector\Detector\Type\Browser\TypeInterface
     */
    public function mapBrowserType($browserType, $browserName = null)
    {
        return (new BrowserTypeMapper())->mapBrowserType($browserType, $browserName);
    }

    /**
     * maps the browser maker
     *
     * @param string $browserMaker
     * @param string $browserName
     *
     * @return string|null
     */
    public function mapBrowserMaker($browserMaker, $browserName = null)
    {
        return (new BrowserMakerMapper())->mapBrowserMaker($browserMaker, $browserName);
    }

    /**
     * maps the name of the operating system
     *
     * @param string $osName
     *
     * @return string
     */
    public function mapOsName($osName)
    {
        return (new PlatformNameMapper())->mapOsName($osName);
    }

    /**
     * maps the maker of the operating system
     *
     * @param string $osMaker
     * @param string $osName
     *
     * @return string
     */
    public function mapOsMaker($osMaker, $osName = null)
    {
        return (new PlatformMakerMapper())->mapOsMaker($osMaker, $osName);
    }

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
        return (new PlatformVersionMapper())->mapOsVersion($osVersion, $osName);
    }

    /**
     * maps the name of a device
     *
     * @param string $deviceType
     *
     * @return \BrowserDetector\Detector\Type\Device\TypeInterface
     */
    public function mapDeviceType($deviceType)
    {
        return (new DeviceTypeMapper())->mapDeviceType($deviceType);
    }

    /**
     * maps the name of a device
     *
     * @param string $deviceName
     *
     * @return string
     */
    public function mapDeviceName($deviceName)
    {
        return (new DeviceNameMapper())->mapDeviceName($deviceName);
    }

    /**
     * maps the maker of a device
     *
     * @param string $deviceMaker
     * @param string $deviceName
     *
     * @return string
     */
    public function mapDeviceMaker($deviceMaker, $deviceName = null)
    {
        return (new DeviceMakerMapper())->mapDeviceMaker($deviceMaker, $deviceName);
    }

    /**
     * maps the marketing name of a device
     *
     * @param string $marketingName
     * @param string $deviceName
     *
     * @return string
     */
    public function mapDeviceMarketingName($marketingName, $deviceName = null)
    {
        $mapper = new DeviceMarketingnameMapper();
        $mname  = $mapper->mapDeviceName($deviceName);

        if (null === $mname) {
            $mname = $mapper->mapDeviceMarketingName($marketingName);
        }

        return $mname;
    }

    /**
     * maps the brand name of a device
     *
     * @param string      $brandName
     * @param string|null $deviceName
     *
     * @return string
     */
    public function mapDeviceBrandName($brandName, $deviceName = null)
    {
        $mapper    = new DeviceBrandnameMapper();
        $brandname = $mapper->mapDeviceName($deviceName);

        if (null === $brandname) {
            $brandname = $mapper->mapDeviceBrandName($brandName);
        }

        return $brandname;
    }

    /**
     * maps the value for the frame/iframe support
     *
     * @param string|boolean $support
     *
     * @return string
     */
    public function mapFrameSupport($support)
    {
        return (new FrameSupportMapper())->mapFrameSupport($support);
    }

    /**
     * maps the version of the operating system
     *
     * @param string $engineVersion
     *
     * @return \UaResult\Version
     */
    public function mapEngineVersion($engineVersion)
    {
        return (new EngineVersionMapper())->mapEngineVersion($engineVersion);
    }
}
