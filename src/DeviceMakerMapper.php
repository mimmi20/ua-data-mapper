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
final class DeviceMakerMapper
{
    /**
     * maps the maker of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceMaker(string $deviceMaker, string | null $deviceName = null): string | null
    {
        if ($deviceName === null) {
            return null;
        }

        return match (mb_strtolower($deviceName)) {
            '', 'unknown', 'other', 'various', 'android 1.6', 'android 2.0', 'android 2.1', 'android 2.2', 'android 2.3', 'android 3.0', 'android 3.1', 'android 3.2', 'android 4.0', 'android 4.1', 'android 4.2', 'android 4.3', 'android 4.4', 'android 5.0', 'android 2.2 tablet', 'android 4 tablet', 'android 4.1 tablet', 'android 4.2 tablet', 'android 4.3 tablet', 'android 4.4 tablet', 'android 5.0 tablet', 'disguised as macintosh', 'mini 1', 'mini 4', 'mini 5', 'windows mobile 6.5', 'windows mobile 7', 'windows mobile 7.5', 'windows phone 7', 'windows phone 8', 'fennec tablet', 'tablet on android', 'fennec', 'opera for series 60', 'opera mini for s60', 'windows mobile (opera)', 'mobi for android', 'mozilla firefox for android', 'firefox for android tablet', 'firefox for android' => null,
            'motomz616', 'motoxt610', 'motxt912b' => 'Motorola',
            'lg/c550/v1.0' => 'LG',
            'gt s8500', 'gp-p6810', 'gt-i8350', 'gt-i9001', 'gt-i9100', 'gt-i9300', 'samsung gt-i9300/i9300xxdlih', 'gt i7500', 'gt-p5110', 'gt s5620', 'sch-i699', 'sgh-i917', 'sgh-i957', 'sgh-i900v', 'sgh i900', 'sph-930' => 'Samsung',
            'acer e310', 'acer e320' => 'Acer',
            'sensationxe beats z715e', 's510b', 'htc desire sv' => 'HTC',
            'asus-padfone' => 'Asus',
            'creative ziio7' => 'Creative',
            'touchpad' => 'HP',
            'u8800' => 'Huawei',
            'd01400' => 'Amazon',
            'nokia asha 201', 'nokia unrecognized ovi browser' => 'Nokia',
            'p9514', 'lifetab p9514', 'lifetab s9512' => 'Medion',
            'ipad', 'iphone' => 'Apple Inc',
            default => (new MakerMapper())->mapMaker($deviceMaker),
        };
    }
}
