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
            // alcatel/tcl
            'one touch 6030x' => 'OneTouch Idol',
            // htc
            'one mini2' => 'One Mini 2',
            // samsung
            'galaxy note 4' => 'Galaxy Note 4',
            'galaxy trend lite' => 'Galaxy Trend Lite',
            'galaxy a9 lte duos (2016, europe)', 'galaxy a9' => 'Galaxy A9',
            'galaxy s24 (usa)', 'galaxy s24' => 'Galaxy S24',
            'galaxy tab s7 plus 12.4 wi-fi', 'galaxy tab s7+ 12.4" wifi' => 'Galaxy Tab S7+ 12.4" WiFi',
            'galaxy s7 (verizon)', 'galaxy s7' => 'Galaxy S7',
            'galaxy s10 (global)', 'galaxy s10' => 'Galaxy S10',
            'galaxy note 10 plus 4g (europe)', 'galaxy note 10+' => 'Galaxy Note 10+',
            'galaxy s22 ultra', 'galaxy s22 ultra 5g (international)' => 'Galaxy S22 Ultra',
            'galaxy s22', 'galaxy s22 5g (international)' => 'Galaxy S22',
            'galaxy s24 ultra', 'galaxy s24 ultra (usa)' => 'Galaxy S24 Ultra',
            'galaxy s24 fe', 'galaxy s24 fe (international)' => 'Galaxy S24 FE',
            'galaxy s21+ 5g', 'galaxy s21 plus 5g (usa)' => 'Galaxy S21+ 5G',
            'iphone se (3rd gen.)', 'iphone se (2022)' => 'iPhone SE (3rd Gen.)',
            'iphone se (2nd gen.)', 'iphone se (2020)' => 'iPhone SE (2nd Gen.)',
            // oppo
            'a95 4g', 'a95' => 'A95',
            'a5 pro 5g', 'a5 pro 5g (china)' => 'A5 Pro 5G',
            // micromax
            'in 1b' => 'IN 1B',
            // xiaomi
            'mi 10', 'mi 10 5g' => 'Mi 10',
            // vivo
            'iqoo neo 10', 'iqoo neo 10 (china)' => 'iQOO Neo 10',
            // xiaomi
            'redmi note 14', 'redmi note 14 4g' => 'Redmi Note 14',
            // lenovo
            'tab plus', 'tab plus wi-fi' => 'Tab Plus',
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
