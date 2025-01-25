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
final class DeviceMarketingnameMapper
{
    /**
     * maps the marketing name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceMarketingName(string | null $marketingName): string | null
    {
        if ($marketingName === null) {
            return null;
        }

        return match (mb_strtolower($marketingName)) {
            '', 'unknown', 'other', 'various' => null,
            'lg optimus chat' => 'Optimus Chat',
            't mobile move balance' => 'T-Mobile Move Balance',
            'xperia arc so-01c for docomo' => 'Xperia Arc SO-01C for DoCoMo',
            'galaxy sii' => 'Galaxy S II',
            'galaxy sii plus' => 'Galaxy S II Plus',
            'galaxy siii', 'galaxy s3' => 'Galaxy S III',
            'galaxy s3 lte international' => 'Galaxy S III LTE International',
            'lifetab' => 'LifeTab',
            'galaxy sii epic 4g touch' => 'Galaxy S II Epic 4G Touch',
            'prestigio multipad' => 'Multipad',
            'samsung galaxy tab 7.0 plus' => 'Galaxy Tab 7.0 Plus',
            'one touch m\'pop' => 'One Touch MPop',
            'people\'s tablet' => 'Peoples Tablet',
            'lumia 530 dual sim' => 'Lumia 530',
            'droid razr i' => 'RAZR i',
            'nokia asha 300', '300' => 'Asha 300',
            'galaxy tabpro 10.1" wifi' => 'Galaxy Tab Pro 10.1 WiFi',
            'galaxy tab 3 10.1" wifi' => 'Galaxy Tab 3 10.1 3G WiFi',
            'galaxy tab 4 10.1" wifi' => 'Galaxy Tab 4 10.1 WiFi',
            'galaxy tab 4 10.1" lte' => 'Galaxy Tab 4 10.1 LTE',
            'galaxy tab 2 10.1" wifi' => 'Galaxy Tab 2 10.1 WiFi',
            'galaxy s5' => 'Galaxy S5',
            'gt-i9515' => 'Galaxy S4',
            'galaxy tab 3 10.1"', 'galaxy tab 3 (10.1)' => 'Galaxy Tab 3 10.1 3G',
            'kindle fire hdx 7" wifi' => 'Kindle Fire HDX 7 WiFi',
            'ideatab b8080-f' => 'Yoga Tab 10 HD+',
            'galaxy note 4' => 'Galaxy Note 4',
            'b8000-f' => 'Yoga B8000-F',
            'iconia a3' => 'Iconia Tab A3',
            'galaxy trend lite' => 'Galaxy Trend Lite',
            'one touch 6030x' => 'One Touch Idol',
            'one mini2' => 'One Mini 2',
            's iii mini' => 'Galaxy S III Mini',
            default => $marketingName,
        };
    }

    /**
     * maps the marketing name of a device from the device name
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
            'acer e320' => 'Liquid Express',
            'touchpad' => 'Touchpad',
            'p9514', 'lifetab p9514' => 'LifeTab P9514',
            'lifetab s9512' => 'LifeTab S9512',
            'htc desire sv' => 'Desire SV',
            'ipad' => 'iPad',
            'iphone' => 'iPhone',
            'e610' => 'Optimus L5',
            default => null,
        };
    }
}
