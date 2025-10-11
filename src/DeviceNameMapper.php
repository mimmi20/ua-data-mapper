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
final class DeviceNameMapper
{
    /**
     * maps the name of a device
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
            '', 'pc', 'unknown', 'other' => null,
            'android', 'android 1.6', 'android 2.0', 'android 2.1', 'android 2.2', 'android 2.3', 'android 3.0', 'android 3.1', 'android 3.2', 'android 4.0', 'android 4.1', 'android 4.2', 'android 4.3', 'android 4.4', 'android 5.0', 'android 2.2 tablet', 'android 4 tablet', 'android 4.1 tablet', 'android 4.2 tablet', 'android 4.3 tablet', 'android 4.4 tablet', 'android 5.0 tablet', 'disguised as macintosh', 'mini 1', 'mini 4', 'mini 5', 'mini 7', 'windows mobile 6.5', 'windows mobile 7', 'windows mobile 7.5', 'windows phone 7', 'windows phone 7.5', 'windows phone 8', 'fennec tablet', 'tablet on android', 'fennec', 'opera for series 60', 'opera mini for s60', 'windows mobile (opera)', 'mobi for android', 'nokia unrecognized ovi browser', 'mozilla firefox for android', 'firefox for android tablet', 'firefox for android', 'firefox os' => 'general Mobile Device',
            'spider' => 'general Bot',
            'motomz616' => 'MZ616',
            'motoxt610' => 'XT610',
            'motxt912b' => 'XT912B',
            'lg/c550/v1.0' => 'C550',
            'gt s8500' => 'GT-S8500',
            'gp-p6810' => 'GT-P6810',
            'gt-i8350' => 'GT-I8350',
            'gt-i9100' => 'GT-I9100',
            'gt-i9300', 'samsung gt-i9300/i9300xxdlih' => 'GT-I9300',
            'gt-i5500' => 'GT-I5500',
            'gt i7500' => 'GT-I7500',
            'gt-p5110' => 'GT-P5110',
            'gt s5620' => 'GT-S5620',
            'sch-i699' => 'SCH-I699',
            'sgh-i957' => 'SGH-I957',
            'sgh-i900v' => 'SGH-I900V',
            'sgh-i917' => 'SGH-I917',
            'sgh i900' => 'SGH-I900',
            'sph-930' => 'SPH-M930',
            'acer e310' => 'E310',
            'acer e320' => 'E320',
            'sensationxe beats z715e' => 'Sensation XE Beats Z715e',
            's510b' => 'S510B',
            'htc desire sv' => 'Desire SV',
            'asus-padfone' => 'PadFone',
            'memopad smart 10', 'memo pad smart 10' => 'MeMO Pad Smart 10',
            'creative ziio7' => 'ZiiO7',
            'touchpad' => 'Touchpad',
            'u8800' => 'U8800',
            'd01400' => 'Kindle',
            'nokia asha 201' => 'Asha 201',
            'nokia asha 300', 'asha 300' => '300',
            '530' => 'Lumia 530',
            'p9514' => 'LifeTab P9514',
            'lifetab s9512' => 'LifeTab S9512',
            'e10312 (md 98486)' => 'LifeTab E10312',
            'i9506' => 'GT-I9506',
            'lifetab_e10320' => 'E10320',
            'xperia sgp312' => 'SGP312',
            'tf300t', 'transformer pad tf300t' => 'TF300T',
            default => $deviceName,
        };
    }
}
