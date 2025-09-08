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

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class DeviceBrandnameMapper
{
    /**
     * maps the brand name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceBrandName(string | null $brandName): string | null
    {
        if ($brandName === null) {
            return null;
        }

        return match (mb_strtolower($brandName)) {
            '', 'unknown', 'other', 'various' => null,
            'htc corporation', 'ht' => 'HTC',
            'au' => 'Asus',
            'sa' => 'Samsung',
            'so' => 'Sony',
            'rm' => 'BlackBerry',
            'nk' => 'Nokia',
            'ac' => 'Acer',
            'go' => 'Google',
            'le', 'md' => 'Lenovo',
            'mr' => 'Motorola',
            'kn' => 'Amazon',
            'hu' => 'Huawei',
            'ni' => 'Nintendo',
            'ap', 'apple inc' => 'Apple',
            'al' => 'Alcatel',
            'mb' => 'Mobistel',
            'wi' => 'Wiko',
            'xi' => 'Xiaomi',
            'ar' => 'Archos',
            'kz' => 'KAZAM',
            'ms' => 'Microsoft',
            'mi' => 'Micromax',
            default => $brandName,
        };
    }

    /**
     * maps the brand name of a device from the device name
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceName(string | null $deviceName): string | null
    {
        if ($deviceName === null) {
            return null;
        }

        return match (mb_strtolower($deviceName)) {
            'p9514', 'lifetab p9514', 'lifetab s9512' => 'Medion',
            'htc desire sv' => 'HTC',
            'ipad', 'iphone' => 'Apple',
            default => null,
        };
    }
}
