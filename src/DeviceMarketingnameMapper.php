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
            'galaxy a21s (2020)', 'galaxy a21s' => 'Galaxy A21s',
            'galaxy a35 5g', 'galaxy a35 5g (international)' => 'Galaxy A35 5G',
            'galaxy a36 5g', 'galaxy a36 5g (international)', 'galaxy a36 5g (usa)' => 'Galaxy A36 5G',
            'galaxy a53 5g', 'galaxy a53 5g (canada)' => 'Galaxy A53 5G',
            'galaxy tab s7 plus 12.4 wi-fi', 'galaxy tab s7+ 12.4" wifi' => 'Galaxy Tab S7+ 12.4" WiFi',
            'galaxy tab s9 fe 10.9" 5g', 'galaxy tab s9 fe 10.9" 5g (international)' => 'Galaxy Tab S9 FE 10.9" 5G',
            'galaxy tab s10 fe+ 13.1"', 'galaxy tab s10 fe+ 13.1" wi-fi' => 'Galaxy Tab S10 FE+ 13.1"',
            'galaxy s7 (verizon)', 'galaxy s7' => 'Galaxy S7',
            'galaxy s10 (global)', 'galaxy s10' => 'Galaxy S10',
            'galaxy note 10 plus 4g (europe)', 'galaxy note 10+' => 'Galaxy Note 10+',
            'galaxy s21 5g', 'galaxy s21 5g (usa unlocked)' => 'Galaxy S21 5G',
            'galaxy s21+ 5g', 'galaxy s21 plus 5g (usa)' => 'Galaxy S21+ 5G',
            'galaxy s22 ultra', 'galaxy s22 ultra 5g (international)' => 'Galaxy S22 Ultra',
            'galaxy s22', 'galaxy s22 5g (international)', 'galaxy s22 5g (korea)' => 'Galaxy S22',
            'galaxy s22+', 'galaxy s22 plus 5g (international)' => 'Galaxy S22+',
            'galaxy s23', 'galaxy s23 (china)', 'galaxy s23 (international)' => 'Galaxy S23',
            'galaxy s23+', 'galaxy s23 plus (international)' => 'Galaxy S23+',
            'galaxy s24 (usa)', 'galaxy s24' => 'Galaxy S24',
            'galaxy s24 fe', 'galaxy s24 fe (international)', 'galaxy s24 fe (usa)' => 'Galaxy S24 FE',
            'galaxy s24 ultra', 'galaxy s24 ultra (usa)' => 'Galaxy S24 Ultra',
            'galaxy s25', 'galaxy s25 (china)', 'galaxy s25 (international)', 'galaxy s25 (korea)', 'galaxy s25 (usa)' => 'Galaxy S25',
            'galaxy s25+', 'galaxy s25 plus (canada)', 'galaxy s25 plus (international)' => 'Galaxy S25+',
            'galaxy s25 ultra', 'galaxy s25 ultra 5g (international)', 'galaxy s25 ultra 5g (china)', 'galaxy s25 ultra 5g (korea)', 'galaxy s25 ultra 5g (usa)', 'galaxy s25 ultra 5g (canada)' => 'Galaxy S25 Ultra',
            'galaxy w25 5g', 'galaxy w25' => 'Galaxy W25',
            'galaxy z flip 6', 'galaxy z flip 6 (international)' => 'Galaxy Z Flip 6',
            // apple
            'iphone se (3rd gen.)', 'iphone se (2022)' => 'iPhone SE (3rd Gen.)',
            'iphone se (2nd gen.)', 'iphone se (2020)' => 'iPhone SE (2nd Gen.)',
            // oppo
            'a95 4g', 'a95' => 'A95',
            'a5 5g', 'a5 5g (china)' => 'A5 5G',
            'a5 pro 5g', 'a5 pro 5g (china)' => 'A5 Pro 5G',
            'a5x', 'a5x 4g' => 'A5x',
            // micromax
            'in 1b' => 'IN 1B',
            // xiaomi
            'mi 10', 'mi 10 5g' => 'Mi 10',
            'x7', 'x7 5g' => 'X7',
            'redmi note 12', 'redmi note 12 4g' => 'Redmi Note 12',
            'redmi note 13', 'redmi note 13 4g' => 'Redmi Note 13',
            'redmi note 14', 'redmi note 14 4g' => 'Redmi Note 14',
            'redmi pad 2', 'redmi pad 2 wi-fi' => 'Redmi Pad 2',
            'redmi 15c', 'redmi 15c 4g' => 'Redmi 15C',
            'redmi a5', 'redmi a5 4g' => 'Redmi A5',
            // vivo
            'iqoo neo 10', 'iqoo neo 10 (china)', 'iqoo neo 10 (india)' => 'iQOO Neo 10',
            'y300', 'y300 (china)' => 'Y300',
            'y29', 'y29 4g' => 'Y29',
            'v50 lite', 'v50 lite 4g' => 'V50 Lite',
            // lenovo
            'tab plus', 'tab plus wi-fi' => 'Tab Plus',
            'tab p12', 'tab p12 wi-fi' => 'Tab P12',
            // infinix
            'hot 60i', 'hot 60i 4g' => 'Hot 60i',
            'hot 60 pro', 'hot 60 pro 4g' => 'Hot 60 Pro',
            'note 50s 5g' => 'Note 50s 5G',
            // oneplus
            'ace 5 racing', 'ace 5 race' => 'Ace 5 Racing',
            // tecno
            'camon 40 pro', 'camon 40 pro 4g' => 'Camon 40 Pro',
            // sony
            'xperia 10 v', 'xperia 10 v 5g (japan)' => 'Xperia 10 V',
            // oukitel
            'c1 (2025)', 'oukitel c1' => 'C1',
            // huawei
            'honor 400', 'honor 400 (china)' => 'Honor 400',
            'honor 400 pro', 'honor 400 pro (china)' => 'Honor 400 Pro',
            // realme
            '14 pro', '14 pro 5g' => '14 Pro',
            // realme
            'mblu 22 pro' => 'mBlu 22 Pro',
            'gt 7', 'gt 7 (global)', 'gt 7 (china)' => 'GT 7',
            // google
            'pixel 4a', 'pixel 4a 5g' => 'Pixel 4a',
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
