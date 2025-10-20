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
            '505', '505 s' => '505',
            // htc
            'one mini2' => 'One Mini 2',
            // samsung
            'galaxy note 4' => 'Galaxy Note 4',
            'galaxy trend lite' => 'Galaxy Trend Lite',
            'galaxy a9 lte duos (2016, europe)', 'galaxy a9' => 'Galaxy A9',
            'galaxy a04', 'galaxy a04 4g' => 'Galaxy A04',
            'galaxy a05', 'galaxy a05 4g' => 'Galaxy A05',
            'galaxy a13 5g', 'galaxy a13 5g (international)' => 'Galaxy A13 5G',
            'galaxy a14', 'galaxy a14 4g' => 'Galaxy A14',
            'galaxy a15 5g', 'galaxy a15 5g (usa)' => 'Galaxy A15 5G',
            'galaxy a21s', 'galaxy a21s (2020)' => 'Galaxy A21s',
            'galaxy a23', 'galaxy a23 4g' => 'Galaxy A23',
            'galaxy a24', 'galaxy a24 4g (international)' => 'Galaxy A24',
            'galaxy a34 5g', 'galaxy a34 5g (international)', 'galaxy a34 5g (asia/africa)' => 'Galaxy A34 5G',
            'galaxy a35 5g', 'galaxy a35 5g (international)', 'galaxy a35 5g (korea)', 'galaxy a35 5g (usa)', 'galaxy a35 5g (china)' => 'Galaxy A35 5G',
            'galaxy a36 5g', 'galaxy a36 5g (international)', 'galaxy a36 5g (usa)' => 'Galaxy A36 5G',
            'galaxy a52 5g', 'galaxy a52 5g (international)' => 'Galaxy A52 5G',
            'galaxy a52s 5g', 'galaxy a52s 5g (international)' => 'Galaxy A52s 5G',
            'galaxy a53 5g', 'galaxy a53 5g (canada)', 'galaxy a53 5g (international)' => 'Galaxy A53 5G',
            'galaxy a54 5g', 'galaxy a54 5g (usa)', 'galaxy a54 5g (international)', 'galaxy a54 5g (china)', 'galaxy a54 5g (asia/africa)' => 'Galaxy A54 5G',
            'galaxy a56 5g', 'galaxy a56 5g (international)' => 'Galaxy A56 5G',
            'galaxy f14', 'galaxy f14 4g' => 'Galaxy F14',
            'galaxy m05', 'galaxy m05 (international)' => 'Galaxy M05',
            'galaxy m35 5g', 'galaxy m35 5g (international)' => 'Galaxy M35 5G',
            'galaxy note 10 plus 4g (europe)', 'galaxy note 10+' => 'Galaxy Note 10+',
            'galaxy s7 (verizon)', 'galaxy s7' => 'Galaxy S7',
            'galaxy s10 (global)', 'galaxy s10' => 'Galaxy S10',
            'galaxy s21 5g', 'galaxy s21 5g (usa unlocked)', 'galaxy s21 5g (korea)', 'galaxy s21 5g (international)', 'galaxy s21 5g (usa)' => 'Galaxy S21 5G',
            'galaxy s21+ 5g', 'galaxy s21 plus 5g (usa)' => 'Galaxy S21+ 5G',
            'galaxy s21 fe 5g', 'galaxy s21 fe 5g (usa)' => 'Galaxy S21 FE 5G',
            'galaxy s22', 'galaxy s22 5g (international)', 'galaxy s22 5g (korea)', 'galaxy s22 5g (usa unlocked)' => 'Galaxy S22',
            'galaxy s22+', 'galaxy s22 plus 5g (international)' => 'Galaxy S22+',
            'galaxy s22 ultra', 'galaxy s22 ultra 5g (international)', 'galaxy s22 ultra 5g (asia/africa)', 'galaxy s22 ultra 5g (usa unlocked)' => 'Galaxy S22 Ultra',
            'galaxy s23', 'galaxy s23 (china)', 'galaxy s23 (international)', 'galaxy s23 5g uw', 'galaxy s23 (usa unlocked)', 'galaxy s23 (usa)' => 'Galaxy S23',
            'galaxy s23+', 'galaxy s23 plus (international)', 'galaxy s23 plus (usa unlocked)' => 'Galaxy S23+',
            'galaxy s23 fe', 'galaxy s23 fe (canada)', 'galaxy s23 fe (usa)', 'galaxy s23 fe (korea)' => 'Galaxy S23 FE',
            'galaxy s23 ultra', 'galaxy s23 ultra (china)', 'galaxy s23 ultra (international)', 'galaxy s23 ultra (usa unlocked)' => 'Galaxy S23 Ultra',
            'galaxy s24', 'galaxy s24 (usa)', 'galaxy s24 (china)', 'galaxy s24 5g uw' => 'Galaxy S24',
            'galaxy s24+', 'galaxy s24+ (china)' => 'Galaxy S24+',
            'galaxy s24 fe', 'galaxy s24 fe (international)', 'galaxy s24 fe (usa)' => 'Galaxy S24 FE',
            'galaxy s24 ultra', 'galaxy s24 ultra (usa)', 'galaxy s24 ultra (canada)' => 'Galaxy S24 Ultra',
            'galaxy s25', 'galaxy s25 (china)', 'galaxy s25 (international)', 'galaxy s25 (korea)', 'galaxy s25 (usa)' => 'Galaxy S25',
            'galaxy s25+', 'galaxy s25 plus (canada)', 'galaxy s25 plus (international)', 'galaxy s25 plus (usa)' => 'Galaxy S25+',
            'galaxy s25 ultra', 'galaxy s25 ultra 5g (international)', 'galaxy s25 ultra 5g (china)', 'galaxy s25 ultra 5g (korea)', 'galaxy s25 ultra 5g (usa)', 'galaxy s25 ultra 5g (canada)' => 'Galaxy S25 Ultra',
            'galaxy tab a9 8.7"', 'galaxy tab a9 8.7" 4g' => 'Galaxy Tab A9 8.7"',
            'galaxy tab a9 8.7" wifi', 'galaxy tab a9 8.7" wi-fi' => 'Galaxy Tab A9 8.7" WiFi',
            'galaxy tab a9+ 11.0" 5g', 'galaxy tab a9+ 11.0" 5g (international, 2023)', 'galaxy tab a9+ 11.0" 5g (usa, 2023)' => 'Galaxy Tab A9+ 11.0" 5G',
            'galaxy tab active 4 pro 10.1" 5g', 'galaxy tab active 4 pro 10.1" 5g (international)' => 'Galaxy Tab Active 4 Pro 10.1" 5G',
            'galaxy tab s6 lite 10.4" wifi', 'galaxy tab s6 lite 10.4" (2024) wi-fi' => 'Galaxy Tab S6 Lite 10.4" WiFi',
            'galaxy tab s7 plus 12.4 wi-fi', 'galaxy tab s7+ 12.4" wifi' => 'Galaxy Tab S7+ 12.4" WiFi',
            'galaxy tab s8 ultra 14.6" wifi', 'galaxy tab s8 ultra 14.6" wi-fi' => 'Galaxy Tab S8 Ultra 14.6" WiFi',
            'galaxy tab s9 fe 10.9" 5g', 'galaxy tab s9 fe 10.9" 5g (international)', 'galaxy tab s9 fe 10.9" 5g (korea)', 'galaxy tab s9 fe 10.9" 5g (usa)' => 'Galaxy Tab S9 FE 10.9" 5G',
            'galaxy tab s10 fe+ 13.1"', 'galaxy tab s10 fe+ 13.1" wi-fi', 'galaxy tab s10 fe+ 13.1" wifi' => 'Galaxy Tab S10 FE+ 13.1"',
            'galaxy w25 5g', 'galaxy w25' => 'Galaxy W25',
            'galaxy z fold 5', 'galaxy z fold 5 (korea)', 'galaxy z fold 5 5g uw', 'galaxy z fold 5 (international)' => 'Galaxy Z Fold 5',
            'galaxy z flip 5', 'galaxy z flip 5 (china)', 'galaxy z flip 5 (international)' => 'Galaxy Z Flip 5',
            'galaxy z flip 6', 'galaxy z flip 6 (international)', 'galaxy z flip 6 (usa)', 'galaxy z flip 6 (china)' => 'Galaxy Z Flip 6',
            // apple
            'iphone se (3rd gen.)', 'iphone se (2022)' => 'iPhone SE (3rd Gen.)',
            'iphone se (2nd gen.)', 'iphone se (2020)' => 'iPhone SE (2nd Gen.)',
            // oppo
            'a5 5g', 'a5 5g (china)' => 'A5 5G',
            'a5 pro', 'a5 pro 4g' => 'A5 Pro',
            'a5 pro 5g', 'a5 pro 5g (china)' => 'A5 Pro 5G',
            'a58', 'a58 4g' => 'A58',
            'a5x', 'a5x 4g' => 'A5x',
            'a95 4g', 'a95' => 'A95',
            'reno 13 f', 'reno 13 f 4g', 'reno 13 f 5g' => 'Reno 13 F',
            'reno 13', 'reno 13 5g' => 'Reno 13',
            'reno 13 pro', 'reno 13 pro 5g' => 'Reno 13 Pro',
            'pad neo', 'pad neo 4g' => 'Pad Neo',
            // micromax
            'in 1b' => 'IN 1B',
            // xiaomi
            'mi 11t', '11t' => '11T',
            'mi 10', 'mi 10 5g' => 'Mi 10',
            'x7', 'x7 5g' => 'X7',
            'redmi note 12', 'redmi note 12 4g', 'redmi note 12 5g' => 'Redmi Note 12',
            'redmi note 12 pro', 'redmi note 12 pro 5g' => 'Redmi Note 12 Pro',
            'redmi note 12 pro+ 5g', 'redmi note 12 pro plus 5g' => 'Redmi Note 12 Pro+ 5G',
            'redmi note 13', 'redmi note 13 4g' => 'Redmi Note 13',
            'redmi note 13 pro', 'redmi note 13 pro 4g' => 'Redmi Note 13 Pro',
            'redmi note 14', 'redmi note 14 4g' => 'Redmi Note 14',
            'redmi note 14 5g', 'redmi note 14 5g (china)' => 'Redmi Note 14 5G',
            'redmi note 14 pro', 'redmi note 14 pro 5g', 'redmi note 14 pro 5g (global)', 'redmi note 14 pro 5g (india)' => 'Redmi Note 14 Pro',
            'redmi note 14 pro+', 'redmi note 14 pro+ 5g (global)', 'redmi note 14 pro+ 5g (india)', 'redmi note 14 pro+ 5g (china)' => 'Redmi Note 14 Pro+',
            'redmi pad 2', 'redmi pad 2 wi-fi', 'redmi pad 2 wifi' => 'Redmi Pad 2',
            'redmi pad pro', 'redmi pad pro 12.1"' => 'Redmi Pad Pro',
            'redmi pad se 8.7"', 'redmi pad se 8.7" 4g' => 'Redmi Pad SE 8.7"',
            'redmi 13', 'redmi 13 4g' => 'Redmi 13',
            'redmi 15c', 'redmi 15c 4g' => 'Redmi 15C',
            'redmi a5', 'redmi a5 4g' => 'Redmi A5',
            'pad 6s pro 12.4"', 'pad 6s pro 12.4" wi-fi', 'pad 6s pro 12.4" wifi' => 'Pad 6S Pro 12.4"',
            // vivo
            'iqoo neo 10', 'iqoo neo 10 (china)', 'iqoo neo 10 (india)' => 'iQOO Neo 10',
            'y300', 'y300 (china)' => 'Y300',
            'y29', 'y29 4g' => 'Y29',
            'v40 lite', 'v40 lite 5g (india)', 'v40 lite (international)' => 'V40 Lite',
            'v50 lite', 'v50 lite 4g' => 'V50 Lite',
            // lenovo
            'tab k10 (gen 2)', 'tab k10 (gen 2) wi-fi', 'tab k10 (gen 2) wifi' => 'Tab K10 (Gen 2)',
            'tab m11', 'tab m11 lte' => 'Tab M11',
            'tab plus', 'tab plus wi-fi', 'tab plus wifi' => 'Tab Plus',
            'tab p11 (gen 2)', 'tab p11 (gen 2) wi-fi', 'tab p11 (gen 2) wifi' => 'Tab P11 (Gen 2)',
            'tab p12', 'tab p12 wi-fi', 'tab p12 wifi' => 'Tab P12',
            // infinix
            'hot 50', 'hot 50 4g' => 'Hot 50',
            'hot 50 pro', 'hot 50 pro 4g' => 'Hot 50 Pro',
            'hot 50 pro+', 'hot 50 pro+ 4g' => 'Hot 50 Pro+',
            'hot 60i', 'hot 60i 4g' => 'Hot 60i',
            'hot 60 pro', 'hot 60 pro 4g' => 'Hot 60 Pro',
            'note 50s 5g' => 'Note 50s 5G',
            'note 50 pro', 'note 50 pro 4g' => 'Note 50 Pro',
            'note 50', 'note 50 4g' => 'Note 50',
            'zero 40', 'zero 40 4g' => 'Zero 40',
            // oneplus
            'ace 5 racing', 'ace 5 race' => 'Ace 5 Racing',
            'pad go 11.35"', 'pad go 11.35" lte' => 'Pad Go 11.35"',
            // tecno
            'camon 40 pro', 'camon 40 pro 4g' => 'Camon 40 Pro',
            'spark go 1s', 'spark go 1s 4g' => 'Spark Go 1S',
            // sony
            'xperia 10 v', 'xperia 10 v 5g (japan)' => 'Xperia 10 V',
            'xperia 10 vi', 'xperia 10 vi 5g' => 'Xperia 10 VI',
            'xperia 1 v', 'xperia 1 v 5g', 'xperia 1 v 5g uw' => 'Xperia 1 V',
            'xperia 1 vi', 'xperia 1 vi 5g' => 'Xperia 1 VI',
            // oukitel
            'c1 (2025)', 'oukitel c1' => 'C1',
            // huawei
            'honor 300 ultra', 'honor 300 ultra 5g' => 'Honor 300 Ultra',
            'honor 400', 'honor 400 (china)' => 'Honor 400',
            'honor 400 pro', 'honor 400 pro (china)' => 'Honor 400 Pro',
            'honor magic 7 rsr', 'honor magic 7 rsr porsche design' => 'Honor Magic 7 RSR',
            // realme
            '9 pro+ 5g', '9 pro plus 5g' => '9 Pro+ 5G',
            '13', '13 5g' => '13',
            '14 pro', '14 pro 5g' => '14 Pro',
            '14 pro+', '14 pro+ 5g' => '14 Pro+',
            'gt 7', 'gt 7 (global)', 'gt 7 (china)' => 'GT 7',
            'c67', 'c67 4g' => 'C67',
            'c75', 'c75 4g' => 'C75',
            'p2 pro 5g', 'p2 pro 5g (india)' => 'P2 Pro 5G',
            // google
            'pixel 4a' => 'Pixel 4a',
            'pixel 4a 5g', 'pixel 4a (5g)' => 'Pixel 4a 5G',
            // asus
            'rog phone 9', 'rog phone 9 pro', 'zenfone 12 ultra' => 'ROG Phone 9',
            // zte/nubia
            'z70s ultra' => 'Z70s Ultra',
            // digma
            'pro empire', 'pro empire ta3e2m01' => 'Pro Empire',
            'pro eclipse', 'pro eclipse ta3e1p02' => 'Pro Eclipse',
            'pro edge', 'pro edge ta3d1m01', 'pro edge ta2d1m01', 'pro edge ta3e1m01' => 'Pro Edge',
            'k10', 'k10 da1c0p01' => 'K10',
            'pro quantum', 'pro quantum ta2d5p01' => 'Pro Quantum',
            'pro zenith', 'pro zenith ta2d1p01', 'pro zenith ta3d1p01', 'pro zenith ta3e1p01' => 'Pro Zenith',
            'pro zoom', 'pro zoom ta3e0p02', 'pro zoom ta3d0p02' => 'Pro Zoom',
            'pro infinity', 'pro infinity ta3d0m01', 'pro infinity ta2d0m01', 'pro infinity ta3e0m01' => 'Pro Infinity',
            'pro spectrum', 'pro spectrum ta2d0p02' => 'Pro Spectrum',
            'pro spark', 'pro spark ta1c8m01' => 'Pro Spark',
            'pro pulse', 'pro pulse ta3e0p01' => 'Pro Pulse',
            'q8', 'q8 da6b8p01' => 'Q8',
            // itel
            'p65c', 'p55' => 'P55',
            // casper
            'via x45' => 'Via X45',
            'via m40' => 'Via M40',
            // Krüger&Matz
            'live 12' => 'Live 12',
            // homii
            'xbook 12' => 'XBook 12',
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
