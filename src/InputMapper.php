<?php

/**
 * This file is part of the mimmi20/ua-data-mapper package.
 *
 * Copyright (c) 2015-2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaDataMapper;

use BrowserDetector\Version\Exception\NotNumericException;
use BrowserDetector\Version\VersionInterface;
use UaBrowserType\TypeInterface as BrowserTypeInterface;
use UaDeviceType\TypeInterface as DeviceTypeInterface;

/**
 * class with caching and update capabilities
 */
final class InputMapper
{
    /**
     * mapps the browser
     *
     * @throws void
     *
     * @api
     */
    public function mapBrowserName(string | null $browserInput): string | null
    {
        return (new BrowserNameMapper())->mapBrowserName($browserInput);
    }

    /**
     * maps the browser version
     *
     * @throws NotNumericException
     *
     * @api
     */
    public function mapBrowserVersion(
        string | null $browserVersion,
        string | null $browserName = null,
    ): VersionInterface {
        return (new BrowserVersionMapper())->mapBrowserVersion($browserVersion, $browserName);
    }

    /**
     * maps the browser type
     *
     * @throws void
     *
     * @api
     */
    public function mapBrowserType(string | null $browserType): BrowserTypeInterface
    {
        return (new BrowserTypeMapper())->mapBrowserType($browserType);
    }

    /**
     * maps the browser maker
     *
     * @throws void
     *
     * @api
     */
    public function mapBrowserMaker(string $browserMaker, string | null $browserName = null): string | null
    {
        return (new BrowserMakerMapper())->mapBrowserMaker($browserMaker, $browserName);
    }

    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapOsName(string | null $osName): string | null
    {
        return (new PlatformNameMapper())->mapOsName($osName);
    }

    /**
     * maps the maker of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapOsMaker(string $osMaker, string | null $osName = null): string | null
    {
        return (new PlatformMakerMapper())->mapOsMaker($osMaker, $osName);
    }

    /**
     * maps the version of the operating system
     *
     * @throws NotNumericException
     *
     * @api
     */
    public function mapOsVersion(string | null $osVersion, string | null $osName = null): VersionInterface
    {
        return (new PlatformVersionMapper())->mapOsVersion($osVersion, $osName);
    }

    /**
     * maps the name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceType(string | null $deviceType): DeviceTypeInterface
    {
        return (new DeviceTypeMapper())->mapDeviceType($deviceType);
    }

    /**
     * maps the name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceName(string | null $deviceName): string | null
    {
        return (new DeviceNameMapper())->mapDeviceName($deviceName);
    }

    /**
     * maps the maker of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceMaker(string $deviceMaker, string | null $deviceName = null): string | null
    {
        return (new DeviceMakerMapper())->mapDeviceMaker($deviceMaker, $deviceName);
    }

    /**
     * maps the marketing name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceMarketingName(string | null $marketingName): string | null
    {
        return (new DeviceMarketingnameMapper())->mapDeviceMarketingName($marketingName);
    }

    /**
     * maps the brand name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceBrandName(string | null $brandName): string | null
    {
        return (new DeviceBrandnameMapper())->mapDeviceBrandName($brandName);
    }

    /**
     * maps the version of the operating system
     *
     * @throws NotNumericException
     *
     * @api
     */
    public function mapEngineVersion(string | null $engineVersion): VersionInterface
    {
        return (new EngineVersionMapper())->mapEngineVersion($engineVersion);
    }

    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapEngineName(string | null $engineName): string | null
    {
        return (new EngineNameMapper())->mapEngineName($engineName);
    }
}
