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
            'tab 11', 'tab 11 lte', 'tab 11 4g', 'tab 11 wi-fi' => 'Tab 11',
            // htc
            'one mini2' => 'One Mini 2',
            // samsung
            'galaxy note 4' => 'Galaxy Note 4',
            'galaxy trend lite' => 'Galaxy Trend Lite',
            'galaxy a9 lte duos (2016, europe)', 'galaxy a9' => 'Galaxy A9',
            'galaxy a03s', 'galaxy a03s 4g', 'galaxy a03s 4g (usa)' => 'Galaxy A03s',
            'galaxy a04', 'galaxy a04 4g' => 'Galaxy A04',
            'galaxy a04s', 'galaxy a04s 4g' => 'Galaxy A04s',
            'galaxy a05', 'galaxy a05 4g' => 'Galaxy A05',
            'galaxy a12', 'galaxy a12 (india)' => 'Galaxy A12',
            'galaxy a13 5g', 'galaxy a13 5g (international)', 'galaxy a13 5g (usa unlocked)' => 'Galaxy A13 5G',
            'galaxy a14', 'galaxy a14 4g' => 'Galaxy A14',
            'galaxy a14 5g', 'galaxy a14 5g (international)', 'galaxy a14 5g (usa unlocked)', 'galaxy a14 5g (usa)' => 'Galaxy A14 5G',
            'galaxy a15 5g', 'galaxy a15 5g (usa)', 'galaxy a15 5g (canada)' => 'Galaxy A15 5G',
            'galaxy a21s', 'galaxy a21s (2020)' => 'Galaxy A21s',
            'galaxy a22', 'galaxy a22 4g' => 'Galaxy A22',
            'galaxy a22 5g', 'galaxy a22 5g (international)' => 'Galaxy A22 5G',
            'galaxy a23', 'galaxy a23 4g' => 'Galaxy A23',
            'galaxy a23 5g', 'galaxy a23 5g (usa)', 'galaxy a23 5g (usa unlocked)', 'galaxy a23 5g (asia/africa)', 'galaxy a23 5g (international)' => 'Galaxy A23 5G',
            'galaxy a24', 'galaxy a24 4g (international)', 'galaxy a24 4g (usa)' => 'Galaxy A24',
            'galaxy a32', 'galaxy a32 4g' => 'Galaxy A32',
            'galaxy a32 5g', 'galaxy a32 5g (usa unlocked)', 'galaxy a32 5g (international)' => 'Galaxy A32 5G',
            'galaxy a33 5g', 'galaxy a33 5g (international)' => 'Galaxy A33 5G',
            'galaxy a34 5g', 'galaxy a34 5g (international)', 'galaxy a34 5g (asia/africa)' => 'Galaxy A34 5G',
            'galaxy a35 5g', 'galaxy a35 5g (international)', 'galaxy a35 5g (korea)', 'galaxy a35 5g (usa)', 'galaxy a35 5g (china)' => 'Galaxy A35 5G',
            'galaxy a36 5g', 'galaxy a36 5g (international)', 'galaxy a36 5g (usa)' => 'Galaxy A36 5G',
            'galaxy a42 5g', 'galaxy a42 5g (korea)' => 'Galaxy A42 5G',
            'galaxy a51', 'galaxy a51 4g (global)', 'galaxy a51 4g (usa unlocked)', 'galaxy a51 4g' => 'Galaxy A51',
            'galaxy a51 5g', 'galaxy a51 5g (international)' => 'Galaxy A51 5G',
            'galaxy a52', 'galaxy a52 4g' => 'Galaxy A52',
            'galaxy a52 5g', 'galaxy a52 5g (international)', 'galaxy a52 5g (usa)' => 'Galaxy A52 5G',
            'galaxy a52s 5g', 'galaxy a52s 5g (international)' => 'Galaxy A52s 5G',
            'galaxy a53 5g', 'galaxy a53 5g (canada)', 'galaxy a53 5g (international)', 'galaxy a53 5g (usa unlocked)', 'galaxy a53 5g (asia/africa)', 'galaxy a53 5g (usa)' => 'Galaxy A53 5G',
            'galaxy a54 5g', 'galaxy a54 5g (usa)', 'galaxy a54 5g (international)', 'galaxy a54 5g (china)', 'galaxy a54 5g (asia/africa)', 'galaxy quantum 4', 'galaxy a54 5g (canada)', 'galaxy a54 5g (usa unlocked)', 'galaxy a54 5g (japan)' => 'Galaxy A54 5G',
            'galaxy a55 5g', 'galaxy a55 5g (china)', 'galaxy a55 5g (japan)' => 'Galaxy A55 5G',
            'galaxy a56 5g', 'galaxy a56 5g (international)' => 'Galaxy A56 5G',
            'galaxy a71', 'galaxy a71 4g' => 'Galaxy A71',
            'galaxy a71 5g', 'galaxy a71 5g (korea)', 'galaxy a quantum', 'galaxy a71 5g (usa)' => 'Galaxy A71 5G',
            'galaxy c55 5g', 'galaxy c55 5g (china)' => 'Galaxy C55 5G',
            'galaxy f04', 'galaxy m04' => 'Galaxy F04',
            'galaxy f14', 'galaxy f14 4g' => 'Galaxy F14',
            'galaxy f14 5g', 'galaxy f14 5g (international)' => 'Galaxy F14 5G',
            'galaxy f15 5g', 'galaxy f15 5g (international)' => 'Galaxy F15 5G',
            'galaxy f34 5g', 'galaxy f34 5g (international)' => 'Galaxy F34 5G',
            'galaxy m05', 'galaxy m05 (international)' => 'Galaxy M05',
            'galaxy m35 5g', 'galaxy m35 5g (international)' => 'Galaxy M35 5G',
            'galaxy note 10 plus 4g (europe)', 'galaxy note 10+' => 'Galaxy Note 10+',
            'galaxy note 20', 'galaxy note 20 4g' => 'Galaxy Note 20',
            'galaxy note 20 5g', 'galaxy note 20 5g (australia)', 'galaxy note 20 5g (korea)' => 'Galaxy Note 20 5G',
            'galaxy note 20 ultra 5g', 'galaxy note 20 ultra 5g (international)' => 'Galaxy Note 20 Ultra 5G',
            'galaxy s7 (verizon)', 'galaxy s7' => 'Galaxy S7',
            'galaxy s10 (global)', 'galaxy s10' => 'Galaxy S10',
            'galaxy s20', 'galaxy s20 4g' => 'Galaxy S20',
            'galaxy s20 5g', 'galaxy s20 5g (international)', 'galaxy s20 5g (china, hong kong)', 'galaxy s20 5g (usa unlocked)' => 'Galaxy S20 5G',
            'galaxy s20+', 'galaxy s20+ 4g' => 'Galaxy S20+',
            'galaxy s20+ 5g', 'galaxy s20+ 5g (international)', 'galaxy s20+ 5g (usa unlocked)', 'galaxy s20+ 5g (korea)' => 'Galaxy S20+ 5G',
            'galaxy s20 fe', 'galaxy s20 fe 4g' => 'Galaxy S20 FE',
            'galaxy s20 fe 5g', 'galaxy s20 fe 5g (usa unlocked)', 'galaxy s20 fe 5g (international)', 'galaxy s20 fe 5g (usa)', 'galaxy s20 fe 5g (china, hong kong)', 'galaxy s20 fe 5g (korea)', 'galaxy s20 fe 5g (verizon)' => 'Galaxy S20 FE 5G',
            'galaxy s20 ultra 5g', 'galaxy s20 ultra 5g (usa unlocked)', 'galaxy s20 ultra 5g (usa)', 'galaxy s20 ultra 5g (china)', 'galaxy s20 ultra 5g (international)' => 'Galaxy S20 Ultra 5G',
            'galaxy s21 5g', 'galaxy s21 5g (usa unlocked)', 'galaxy s21 5g (korea)', 'galaxy s21 5g (international)', 'galaxy s21 5g (usa)' => 'Galaxy S21 5G',
            'galaxy s21+ 5g', 'galaxy s21+ 5g (usa)', 'galaxy s21+ 5g (international)' => 'Galaxy S21+ 5G',
            'galaxy s21 fe 5g', 'galaxy s21 fe 5g (usa)', 'galaxy s21 fe 5g (usa unlocked)', 'galaxy s21 fe 5g (canada)' => 'Galaxy S21 FE 5G',
            'galaxy s21 ultra 5g', 'galaxy s21 ultra 5g (international)', 'galaxy s21 ultra 5g (korea)', 'galaxy s21 ultra 5g (china)', 'galaxy s21 ultra 5g (usa)' => 'Galaxy S21 Ultra 5G',
            'galaxy s22', 'galaxy s22 5g (international)', 'galaxy s22 5g (korea)', 'galaxy s22 5g (usa unlocked)', 'galaxy s22 5g (asia/africa)', 'galaxy s22 5g (usa)' => 'Galaxy S22',
            'galaxy s22+', 'galaxy s22+ 5g (usa)', 'galaxy s22+ 5g (international)', 'galaxy s22+ 5g (asia/africa)', 'galaxy s22+ 5g (usa unlocked)' => 'Galaxy S22+',
            'galaxy s22 ultra', 'galaxy s22 ultra 5g (international)', 'galaxy s22 ultra 5g (asia/africa)', 'galaxy s22 ultra 5g (usa unlocked)', 'galaxy s22 ultra 5g (usa)', 'galaxy s22 ultra 5g (china)' => 'Galaxy S22 Ultra',
            'galaxy s23', 'galaxy s23 (china)', 'galaxy s23 (international)', 'galaxy s23 5g uw', 'galaxy s23 (usa unlocked)', 'galaxy s23 (usa)', 'galaxy s23 (canada)', 'galaxy s23 (korea)', 'galaxy s23 5g uw (japan)' => 'Galaxy S23',
            'galaxy s23+', 'galaxy s23+ (international)', 'galaxy s23+ (usa unlocked)', 'galaxy s23+ (korea)', 'galaxy s23+ (china)' => 'Galaxy S23+',
            'galaxy s23 fe', 'galaxy s23 fe (canada)', 'galaxy s23 fe (usa)', 'galaxy s23 fe (korea)', 'galaxy s23 fe (japan)' => 'Galaxy S23 FE',
            'galaxy s23 ultra', 'galaxy s23 ultra (china)', 'galaxy s23 ultra (international)', 'galaxy s23 ultra (usa unlocked)', 'galaxy s23 ultra (canada)', 'galaxy s23 ultra (korea)', 'galaxy s23 ultra (usa)' => 'Galaxy S23 Ultra',
            'galaxy s24', 'galaxy s24 (usa)', 'galaxy s24 (china)', 'galaxy s24 5g uw', 'galaxy s24 (canada)', 'galaxy s24 (japan)', 'galaxy s24 (korea)' => 'Galaxy S24',
            'galaxy s24+', 'galaxy s24+ (china)', 'galaxy s24+ (usa)', 'galaxy s24+ (korea)', 'galaxy s24+ (canada)' => 'Galaxy S24+',
            'galaxy s24 fe', 'galaxy s24 fe (international)', 'galaxy s24 fe (usa)' => 'Galaxy S24 FE',
            'galaxy s24 ultra', 'galaxy s24 ultra (usa)', 'galaxy s24 ultra (canada)', 'galaxy s24 ultra (japan)', 'galaxy s24 ultra (korea)', 'galaxy s24 ultra (china)' => 'Galaxy S24 Ultra',
            'galaxy s25', 'galaxy s25 (china)', 'galaxy s25 (international)', 'galaxy s25 (korea)', 'galaxy s25 (usa)' => 'Galaxy S25',
            'galaxy s25+', 'galaxy s25 plus (canada)', 'galaxy s25 plus (international)', 'galaxy s25 plus (usa)' => 'Galaxy S25+',
            'galaxy s25 ultra', 'galaxy s25 ultra 5g (international)', 'galaxy s25 ultra 5g (china)', 'galaxy s25 ultra 5g (korea)', 'galaxy s25 ultra 5g (usa)', 'galaxy s25 ultra 5g (canada)' => 'Galaxy S25 Ultra',
            'galaxy tab a7 lite 8.7" 4g (2021)', 'galaxy tab a7 lite 8.7" (2021) lte' => 'Galaxy Tab A7 Lite 8.7" 4G (2021)',
            'galaxy tab a7 lite 8.7" wi-fi (2021)', 'galaxy tab a7 lite 8.7" (2021) wifi' => 'Galaxy Tab A7 Lite 8.7" Wi-Fi (2021)',
            'galaxy tab a9 8.7"', 'galaxy tab a9 8.7" 4g' => 'Galaxy Tab A9 8.7"',
            'galaxy tab a8 10.5" wi-fi', 'galaxy tab a8 10.5" wi-fi (2021)', 'galaxy tab a8 10.5" wifi' => 'Galaxy Tab A8 10.5" Wi-Fi',
            'galaxy tab a8 10.5" lte', 'galaxy tab a8 10.5" lte (2021)' => 'Galaxy Tab A8 10.5" LTE',
            'galaxy tab a9 8.7" wifi', 'galaxy tab a9 8.7" wi-fi' => 'Galaxy Tab A9 8.7" Wi-Fi',
            'galaxy tab a9+ 11.0" 5g', 'galaxy tab a9+ 11.0" 5g (international, 2023)', 'galaxy tab a9+ 11.0" 5g (usa, 2023)' => 'Galaxy Tab A9+ 11.0" 5G',
            'galaxy tab a9+ 11.0" wi-fi', 'galaxy tab a9+ 11.0" wifi' => 'Galaxy Tab A9+ 11.0" Wi-Fi',
            'galaxy tab active 4 pro 10.1" 5g', 'galaxy tab active 4 pro 10.1" 5g (international)' => 'Galaxy Tab Active 4 Pro 10.1" 5G',
            'galaxy tab s4 10.5"', 'galaxy tab s4 10.5" lte (2018)' => 'Galaxy Tab S4 10.5"',
            'galaxy tab s6 lite 10.4"', 'galaxy tab s6 lite 10.4" wifi', 'galaxy tab s6 lite 10.4" wi-fi (2024)', 'galaxy tab s6 lite 10.4" wi-fi (2022)', 'galaxy tab s6 lite 10.4" lte (2022)' => 'Galaxy Tab S6 Lite 10.4"',
            'galaxy tab s7 11.0" 4g', 'galaxy tab s7 11.0" lte' => 'Galaxy Tab S7 11.0" 4G',
            'galaxy tab s7 fe 12.4" 5g', 'galaxy tab s7 fe 12.4" 5g (international)' => 'Galaxy Tab S7 FE 12.4" 5G',
            'galaxy tab s7 fe 12.4" wi-fi', 'galaxy tab s7 fe 12.4" wifi' => 'Galaxy Tab S7 FE 12.4" Wi-Fi',
            'galaxy tab s7 plus 12.4 wi-fi', 'galaxy tab s7+ 12.4" wifi' => 'Galaxy Tab S7+ 12.4" Wi-Fi',
            'galaxy tab s8 11.0" 5g', 'galaxy tab s8 11.0" 5g (international)' => 'Galaxy Tab S8 11.0" 5G',
            'galaxy tab s8 11.0" wi-fi', 'galaxy tab s8 11.0" wifi' => 'Galaxy Tab S8 11.0" Wi-Fi',
            'galaxy tab s8+ 12.4" wi-fi', 'galaxy tab s8+ 12.4" wifi' => 'Galaxy Tab S8+ 12.4" Wi-Fi',
            'galaxy tab s8 ultra 14.6" wifi', 'galaxy tab s8 ultra 14.6" wi-fi' => 'Galaxy Tab S8 Ultra 14.6" Wi-Fi',
            'galaxy tab s8 ultra 14.6" 5g', 'galaxy tab s8 ultra 14.6" 5g (international)' => 'Galaxy Tab S8 Ultra 14.6" 5G',
            'galaxy tab s9 11" wi-fi', 'galaxy tab s9 11" wifi' => 'Galaxy Tab S9 11" Wi-Fi',
            'galaxy tab s9 fe 10.9" wi-fi', 'galaxy tab s9 fe 10.9" wifi' => 'Galaxy Tab S9 FE 10.9" Wi-Fi',
            'galaxy tab s9 fe 10.9" 5g', 'galaxy tab s9 fe 10.9" 5g (international)', 'galaxy tab s9 fe 10.9" 5g (korea)', 'galaxy tab s9 fe 10.9" 5g (usa)' => 'Galaxy Tab S9 FE 10.9" 5G',
            'galaxy tab s9 fe+ 12.4" wi-fi', 'galaxy tab s9 fe+ 12.4" wifi' => 'Galaxy Tab S9 FE+ 12.4" Wi-Fi',
            'galaxy tab s9 ultra 14.6" wi-fi', 'galaxy tab s9 ultra 14.6" wifi' => 'Galaxy Tab S9 Ultra 14.6" Wi-Fi',
            'galaxy tab s9+ 12.4"', 'galaxy tab s9+ 12.4" wi-fi' => 'Galaxy Tab S9+ 12.4"',
            'galaxy tab s9+ 12.4" 5g', 'galaxy tab s9+ 12.4" 5g (usa)' => 'Galaxy Tab S9+ 12.4" 5G',
            'galaxy tab s10 fe 10.9" wi-fi', 'galaxy tab s10 fe 10.9" wifi' => 'Galaxy Tab S10 FE 10.9" Wi-Fi',
            'galaxy tab s10 fe+ 13.1"', 'galaxy tab s10 fe+ 13.1" wi-fi', 'galaxy tab s10 fe+ 13.1" wifi' => 'Galaxy Tab S10 FE+ 13.1"',
            'galaxy tab s10 ultra 14.6" wi-fi', 'galaxy tab s10 ultra 14.6" wifi' => 'Galaxy Tab S10 Ultra 14.6" Wi-Fi',
            'galaxy tab s10+ 12.4" wi-fi', 'galaxy tab s10+ 12.4" wifi' => 'Galaxy Tab S10+ 12.4" Wi-Fi',
            'galaxy tab s11 wi-fi', 'galaxy tab s11 wifi' => 'Galaxy Tab S11 Wi-Fi',
            'galaxy w24 5g', 'galaxy w24 fold' => 'Galaxy W24',
            'galaxy w24 flip', 'galaxy w24 flip 5g' => 'Galaxy W24 Flip',
            'galaxy w25 5g', 'galaxy w25' => 'Galaxy W25',
            'galaxy watch 6 classic (43mm)', 'galaxy watch 6 classic 43mm' => 'Galaxy Watch 6 Classic (43mm)',
            'galaxy watch 6 classic (47mm)', 'galaxy watch 6 classic 47mm' => 'Galaxy Watch 6 Classic (47mm)',
            'galaxy xcover 6 pro', 'galaxy xcover 6 pro (usa)', 'galaxy xcover 6 pro (international)' => 'Galaxy Xcover 6 Pro',
            'galaxy z fold 2 5g', 'galaxy z fold 2 5g (international)' => 'Galaxy Z Fold 2 5G',
            'galaxy z fold 3 5g', 'galaxy z fold 3 5g (canada)', 'galaxy z fold 3 5g (international)', 'galaxy z fold 3 5g (korea)' => 'Galaxy Z Fold 3 5G',
            'galaxy z fold 4', 'galaxy z fold 4 5g (international)', 'galaxy z fold 4 5g (canada)' => 'Galaxy Z Fold 4',
            'galaxy z fold 5', 'galaxy z fold 5 (korea)', 'galaxy z fold 5 5g uw', 'galaxy z fold 5 (international)', 'galaxy z fold 5 (china)', 'galaxy z fold 5 (canada)' => 'Galaxy Z Fold 5',
            'galaxy z fold 6', 'galaxy z fold 6 (korea)' => 'Galaxy Z Fold 6',
            'galaxy z flip 5g', 'galaxy z flip 5g (usa)' => 'Galaxy Z Flip 5G',
            'galaxy z flip 3', 'galaxy z flip 3 5g (usa)', 'galaxy z flip 3 5g (china)', 'galaxy z flip 3 5g (international)' => 'Galaxy Z Flip 3',
            'galaxy z flip 4', 'galaxy z flip 4 (china)', 'galaxy z flip 4 (international)', 'galaxy z flip 4 (usa)' => 'Galaxy Z Flip 4',
            'galaxy z flip 5', 'galaxy z flip 5 (china)', 'galaxy z flip 5 (international)', 'galaxy z flip 5 (japan)', 'galaxy z flip 5 (canada)', 'galaxy z flip 5 (usa unlocked)', 'galaxy z flip 5 (korea)' => 'Galaxy Z Flip 5',
            'galaxy z flip 6', 'galaxy z flip 6 (international)', 'galaxy z flip 6 (usa)', 'galaxy z flip 6 (china)', 'galaxy z flip 6 (canada)' => 'Galaxy Z Flip 6',
            // apple
            'iphone se (3rd gen.)', 'iphone se (2022)' => 'iPhone SE (3rd Gen.)',
            'iphone se (2nd gen.)', 'iphone se (2020)' => 'iPhone SE (2nd Gen.)',
            'iphone 6s' => 'iPhone 6S',
            'iphone 6s plus' => 'iPhone 6S Plus',
            // oppo
            'a1x', 'a2x 5g' => 'A1x',
            'a3', 'a3 4g' => 'A3',
            'a3x', 'a3x 4g' => 'A3x',
            'a3x 5g', 'a3x 5g (china)' => 'A3x 5G',
            'a3 5g', 'a3 5g (india)' => 'A3 5G',
            'a3 energy', 'a3 energy (china)' => 'A3 Energy',
            'a3 pro 5g', 'a3 pro 5g (china)' => 'A3 Pro 5G',
            'a5 5g', 'a5 5g (china)' => 'A5 5G',
            'a5 pro', 'a5 pro 4g' => 'A5 Pro',
            'a5 pro 5g', 'a5 pro 5g (china)' => 'A5 Pro 5G',
            'a58', 'a58 4g' => 'A58',
            'a5x', 'a5x 4g' => 'A5x',
            'a74', 'f19s' => 'A74',
            'a78', 'a78 4g' => 'A78',
            'a94 4g', 'a94', 'a96' => 'A94',
            'a95 4g', 'a95' => 'A95',
            'find x2 pro', 'find x2 pro 5g' => 'Find X2 Pro',
            'k11x 5g', 'k11x 5g (china)' => 'K11x 5G',
            'k12x 5g', 'k12x 5g (china)' => 'K12x 5G',
            'pad 11.61" wi-fi', 'pad 11.61" wifi' => 'Pad 11.61" Wi-Fi',
            'pad neo', 'pad neo 4g' => 'Pad Neo',
            'reno 6', 'reno 6 5g' => 'Reno 6',
            'reno 7', 'reno 7 5g (china)' => 'Reno 7',
            'reno 8', 'reno 8 pro' => 'Reno 8',
            'reno 8t', 'reno 8t 4g', 'reno 8t 5g' => 'Reno 8T',
            'reno 9 a', 'reno 9a 5g' => 'Reno 9A',
            'reno 10', 'reno 10 (china)' => 'Reno 10',
            'reno 11', 'reno 11 (china)' => 'Reno 11',
            'reno 11 pro', 'reno 11 pro (china)' => 'Reno 11 Pro',
            'reno 12', 'reno 12 (china)', 'reno 12 5g (china)', 'reno 12 pro (china)' => 'Reno 12',
            'reno 13 f', 'reno 13 f 4g', 'reno 13 f 5g' => 'Reno 13 F',
            'reno 13', 'reno 13 5g' => 'Reno 13',
            'reno 13 pro', 'reno 13 pro 5g' => 'Reno 13 Pro',
            // micromax
            'in 1b' => 'IN 1B',
            // xiaomi
            '11i', 'mi 11i' => '11i',
            '11 lite 5g ne', 'mi 11 lite 5g' => '11 Lite 5G NE',
            '12 lite', '12 lite 5g' => '12 Lite',
            '12 lite ne', '13 lite' => '12 Lite NE',
            '14t', '14t pro' => '14T',
            'mi 11t', '11t' => '11T',
            'mi 10', 'mi 10 5g' => 'Mi 10',
            'mi pad 5 pro', 'mi pad 5 pro 11" wi-fi', 'mi pad 5 pro 11" 5g' => 'Mi Pad 5 Pro',
            'pad 5', 'mi pad 5' => 'Pad 5',
            'pad 6 pro', 'mi pad 6 pro' => 'Mi Pad 6 Pro',
            'pad 6s pro 12.4"', 'pad 6s pro 12.4" wi-fi', 'pad 6s pro 12.4" wifi' => 'Pad 6S Pro 12.4"',
            'redmi 13', 'redmi 13 4g' => 'Redmi 13',
            'redmi 14c 5g', 'redmi 14r 5g' => 'Redmi 14C 5G',
            'redmi 15c', 'redmi 15c 4g' => 'Redmi 15C',
            'redmi a2', 'redmi a2+' => 'Redmi A2',
            'redmi a3', 'redmi 3' => 'Redmi A3',
            'redmi a5', 'redmi a5 4g' => 'Redmi A5',
            'redmi note 9 pro', 'redmi note 9 pro (india)' => 'Redmi Note 9 Pro',
            'redmi note 10 pro', 'redmi k40 gaming edition' => 'Redmi Note 10 Pro',
            'redmi note 11 pro', 'redmi note 11 pro 4g' => 'Redmi Note 11 Pro',
            'redmi note 11 pro+', 'redmi note 11 pro+ 5g' => 'Redmi Note 11 Pro+',
            'redmi note 12', 'redmi note 12 4g', 'redmi note 12 5g', 'note 12 4g top edition' => 'Redmi Note 12',
            'redmi note 12 pro', 'redmi note 12 pro 5g', 'redmi note 12 pro 4g', 'redmi k60', 'note 12 pro' => 'Redmi Note 12 Pro',
            'redmi note 12 pro+ 5g', 'redmi note 12 pro plus 5g' => 'Redmi Note 12 Pro+ 5G',
            'redmi note 12 turbo', 'redmi note 12t' => 'Redmi Note 12 Turbo',
            'redmi note 13', 'redmi note 13 4g' => 'Redmi Note 13',
            'redmi note 13r', 'redmi note 13r (china)' => 'Redmi Note 13R',
            'redmi note 13 pro', 'redmi note 13 pro 4g' => 'Redmi Note 13 Pro',
            'redmi note 14', 'redmi note 14 4g' => 'Redmi Note 14',
            'redmi note 14 5g', 'redmi note 14 5g (china)', 'redmi note 14 5g (global)', 'redmi note 14 5g (india)' => 'Redmi Note 14 5G',
            'redmi note 14 pro', 'redmi note 14 pro 5g', 'redmi note 14 pro 5g (global)', 'redmi note 14 pro 5g (india)', 'redmi note 14 pro 4g', 'redmi note 14 pro 5g (china)' => 'Redmi Note 14 Pro',
            'redmi note 14 pro+', 'redmi note 14 pro+ 5g (global)', 'redmi note 14 pro+ 5g (india)', 'redmi note 14 pro+ 5g (china)' => 'Redmi Note 14 Pro+',
            'redmi pad 2', 'redmi pad 2 wi-fi', 'redmi pad 2 wifi' => 'Redmi Pad 2',
            'redmi pad pro', 'redmi pad pro 12.1"' => 'Redmi Pad Pro',
            'redmi pad se 8.7"', 'redmi pad se 8.7" 4g' => 'Redmi Pad SE 8.7"',
            'x7', 'x7 5g' => 'X7',
            // vivo
            'iqoo 9t', 'iqoo 9t 5g' => 'iQOO 9T',
            'iqoo 11', 'iqoo 11 5g' => 'iQOO 11',
            'iqoo neo 7', 'iqoo neo 7 (china)' => 'iQOO Neo 7',
            'iqoo neo 7 se', 'y22' => 'iQOO Neo 7 SE',
            'iqoo neo 9 pro', 'iqoo neo 9 pro (china)', 'iqoo neo 9 pro (international)' => 'iQOO Neo 9 Pro',
            'iqoo neo 10', 'iqoo neo 10 (china)', 'iqoo neo 10 (india)' => 'iQOO Neo 10',
            'iqoo z7x', 'iqoo z7x 5g' => 'iQOO Z7x',
            'iqoo z9', 'iqoo z9 (china)' => 'iQOO Z9',
            'iqoo z10 lite', 'iqoo z10 lite 4g' => 'iQOO Z10 Lite',
            't2', 't2 (china)' => 'T2',
            't2 5g', 't2 5g (india)' => 'T2 5G',
            't2x 5g', 't2x 5g (india)' => 'T2x 5G',
            'v25e', 'v25e 4g (international)' => 'V25e',
            'v27e', 'v25e 4g (latam)' => 'V27e',
            'v29 pro', 'v29 pro 5g' => 'V29 Pro',
            'v30 lite', 'v30 lite (me)' => 'V30 Lite',
            'v40 lite', 'v40 lite 5g (india)', 'v40 lite (international)' => 'V40 Lite',
            'v50 lite', 'v50 lite 4g' => 'V50 Lite',
            'x fold 3', 'x fold 3 pro' => 'X Fold 3',
            'y18', 'y18 (india)' => 'Y18',
            'y52', 'y52 5g' => 'Y52',
            'y100', 'y100 4g' => 'Y100',
            'y200 5g', 'y200 5g (china)' => 'Y200 5G',
            'y300', 'y300 (china)', 'y29', 'y29 4g' => 'Y300',
            'y300t', 'y300+' => 'Y300t',
            // lenovo
            'tab k10 (gen 2)', 'tab k10 (gen 2) wi-fi', 'tab k10 (gen 2) wifi' => 'Tab K10 (Gen 2)',
            'tab m11', 'tab m11 lte', 'tab m11 wi-fi' => 'Tab M11',
            'tab plus', 'tab plus wi-fi', 'tab plus wifi' => 'Tab Plus',
            'tab p11 (gen 2)', 'tab p11 (gen 2) wi-fi', 'tab p11 (gen 2) wifi', 'tab p11 (2nd gen, 2022)' => 'Tab P11 (Gen 2)',
            'tab p12', 'tab p12 wi-fi', 'tab p12 wifi' => 'Tab P12',
            'legion y700', 'legion y700 wi-fi (2025)' => 'Legion Y700',
            'tab m9', 'tab m9 wi-fi' => 'Tab M9',
            'xiaoxin pad pro 12.7"', 'xiaoxin pad pro 12.7" wi-fi' => 'Xiaoxin Pad Pro 12.7"',
            'tab m8 (gen 4) (2024)', 'tab m8 4g (4rd gen, 2024)' => 'Tab M8 4G (4rd Gen, 2024)',
            'tab m10 plus (gen 3)', 'tab m10 plus (3rd gen) wi-fi', 'tab m10 plus (3rd gen) 5g' => 'Tab M10 Plus (Gen 3)',
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
            'note 40 pro', 'note 40 pro 4g' => 'Note 40 Pro',
            'hot 30 play', 'hot 30 play nfc' => 'Hot 30 Play',
            // oneplus
            '8 pro', '8 pro 5g (europe/asia)', '8 pro 5g (north america)' => '8 Pro',
            'ace 5 racing', 'ace 5 race' => 'Ace 5 Racing',
            'nord ce 2 lite', 'nord ce2 lite 5g' => 'Nord CE2 Lite',
            'nord ce 3 5g', 'nord ce3 5g' => 'Nord CE3 5G',
            'nord ce4', 'nord ce 4' => 'Nord CE4',
            'nord ce 4 lite 5g', 'nord ce4 lite 5g (india)' => 'Nord CE4 Lite 5G',
            'pad 2 12.1" wi-fi', 'pad 2 12.1" wifi' => 'Pad 2 12.1" Wi-Fi',
            'pad go 11.35"', 'pad go 11.35" lte' => 'Pad Go 11.35"',
            // tecno
            'camon 40 pro', 'camon 40 pro 4g' => 'Camon 40 Pro',
            'spark go 1s', 'spark go 1s 4g' => 'Spark Go 1S',
            'spark 30c 5g', 'pop 9 5g' => 'Spark 30C 5G',
            // sony
            'xperia 10 v', 'xperia 10 v 5g (japan)' => 'Xperia 10 V',
            'xperia 10 vi', 'xperia 10 vi 5g' => 'Xperia 10 VI',
            'xperia 1 v', 'xperia 1 v 5g', 'xperia 1 v 5g uw', 'xperia 1 v 5g (japan)' => 'Xperia 1 V',
            'xperia 1 vi', 'xperia 1 vi 5g' => 'Xperia 1 VI',
            'xperia 5 iv', 'xperia 5 iv 5g' => 'Xperia 5 IV',
            // oukitel
            'c1 (2025)', 'oukitel c1' => 'C1',
            // huawei
            'honor 300 ultra', 'honor 300 ultra 5g' => 'Honor 300 Ultra',
            'honor 400', 'honor 400 (china)' => 'Honor 400',
            'honor 400 pro', 'honor 400 pro (china)' => 'Honor 400 Pro',
            'honor magic 6 pro', 'honor magic 6 rsr' => 'Honor Magic 6 Pro',
            'honor magic 7 rsr', 'honor magic 7 rsr porsche design' => 'Honor Magic 7 RSR',
            'honor pad gt pro 12.3" wi-fi', 'honor pad gt pro 12.3" wifi' => 'Honor Pad GT Pro 12.3" Wi-Fi',
            'honor pad gt 11.5" wi-fi', 'honor pad gt 11.5" wifi' => 'Honor Pad GT 11.5" Wi-Fi',
            'honor pad x9a 11.5" wi-fi', 'honor pad x9a 11.5" wifi' => 'Honor Pad X9a 11.5" Wi-Fi',
            'honor pad v9 11.5" wi-fi', 'honor pad v9 11.5" wifi' => 'Honor Pad V9 11.5" Wi-Fi',
            'honor x7c', 'honor x7c 4g' => 'Honor X7c',
            'honor pad x8a wi-fi', 'honor pad x8a wifi' => 'Honor Pad X8a Wi-Fi',
            'honor magicpad 2 12.3" wi-fi', 'honor magicpad 2 wifi' => 'Honor MagicPad 2 12.3" Wi-Fi',
            'honor 200 lite', 'honor 200 lite 5g' => 'Honor 200 Lite',
            'matepad 11 wi-fi (2023)', 'matepad 11 (2023) wifi' => 'MatePad 11 Wi-Fi (2023)',
            'matepad 11.5" air', 'matepad 11.5" air lte (2021)' => 'MatePad 11.5" Air',
            'mediapad m3 lite', 'mediapad m3 lite 10 wi-fi' => 'MediaPad M3 Lite',
            'honor x9c', 'honor magic 7 lite' => 'Honor X9c',
            // realme
            '9 pro+ 5g', '9 pro plus 5g' => '9 Pro+ 5G',
            '10 pro', '10 pro 5g' => '10 Pro',
            '11', '11 5g (2023)' => '11',
            '12', '12 4g' => '12',
            '12 pro', '12 pro 5g' => '12 Pro',
            '12 pro+', '12 pro+ 5g' => '12 Pro+',
            '12x 5g', '12x 5g (india)' => '12x 5G',
            '13', '13 5g' => '13',
            '14 pro', '14 pro 5g' => '14 Pro',
            '14 pro+', '14 pro+ 5g' => '14 Pro+',
            '14x', '14x (global)', 'c75x' => '14x',
            '14x 5g', 'c75 5g' => '14x 5G',
            'c53', 'c53 (india)' => 'C53',
            'c65 5g', '12x (international)' => 'C65 5G',
            'c67', 'c67 4g' => 'C67',
            'c75', 'c75 4g' => 'C75',
            'gt 6', 'gt 6 5g' => 'GT 6',
            'gt 7', 'gt 7 (global)', 'gt 7 (china)' => 'GT 7',
            'gt neo 2', 'gt neo 2 5g' => 'GT Neo 2',
            'gt neo 6', 'gt neo 6 5g' => 'GT Neo 6',
            'note 60', 'narzo n61' => 'Note 60',
            'p2 pro 5g', 'p2 pro 5g (india)' => 'P2 Pro 5G',
            // google
            'pixel 4a', 'pixel 4a 5g', 'pixel 4a (5g)' => 'Pixel 4a',
            // asus
            'rog phone 6d', 'rog phone 6d 5g' => 'ROG Phone 6D',
            'rog phone 9', 'rog phone 9 pro', 'zenfone 12 ultra' => 'ROG Phone 9',
            'zenfone 6', 'zenfone 6 (zs630kl)' => 'ZenFone 6',
            // zte/nubia
            'z70s ultra' => 'Z70s Ultra',
            'blade a73', 'blade a73 5g' => 'Blade A73',
            'blade a75', 'blade a75 4g' => 'Blade A75',
            'blade v60 design 4g', 'axon 60 lite' => 'Blade V60 Design 4G',
            'blade v70 vita', 'blade v70 design' => 'Blade V70 Vita',
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
            'pro pulse', 'pro pulse ta3e0p01', 'pro pulse ta3d0p01', 'pro pulse ta2d0p01' => 'Pro Pulse',
            'q8', 'q8 da6b8p01' => 'Q8',
            // itel
            'p55', 'p65c' => 'P55',
            'p55t', 'p55t 5g' => 'P55T',
            // casper
            'via a40' => 'Via A40',
            'via l40' => 'Via L40',
            'via l50' => 'Via L50',
            'via m40' => 'Via M40',
            'via x40' => 'Via X40',
            'via x45' => 'Via X45',
            // Krüger&Matz
            'drive 10' => 'Drive 10',
            'flow 10' => 'Flow 10',
            'flow 11' => 'Flow 11',
            'live 12' => 'Live 12',
            'move 10' => 'Move 10',
            // homii
            'xbook 12' => 'XBook 12',
            // blackview
            'tab 9 wi-fi', 'tab 9 wifi' => 'Tab 9 Wi-Fi',
            'tab 10 wi-fi', 'tab 10 wifi' => 'Tab 10 Wi-Fi',
            'tab 70 wi-fi', 'tab 70 wifi' => 'Tab 70 Wi-Fi',
            'tab 90 wi-fi', 'tab 90 wifi' => 'Tab 90 Wi-Fi',
            // poco
            'm6', 'm6 4g' => 'M6',
            'f6', 'f6 5g' => 'F6',
            'pad 12.1"', 'pad 12.1" wi-fi' => 'Pad 12.1"',
            // oscal
            'pad 70 wi-fi', 'pad 70 wifi' => 'Pad 70 Wi-Fi',
            'pad 80 wi-fi', 'pad 80 wifi' => 'Pad 80 Wi-Fi',
            // chuwi
            'hi10 xpro', 'hi10 xpro pad' => 'Hi10 XPro',
            // motorola
            'edge 30 ultra 5g', 'moto edge x30 5g' => 'Edge 30 Ultra 5G',
            'edge+ (2023)', 'edge plus (2023)' => 'Edge+ (2023)',
            'moto g50', 'moto g50 4g' => 'Moto G50',
            'moto razr 40', 'moto razr 40 5g (2023)' => 'Moto Razr 40',
            'moto razr 50', 'moto razr 50 5g (2024)' => 'Moto Razr 50',
            's50 neo 5g', 'moto g85 5g' => 'S50 Neo 5G',
            // nuu-mobile
            'b30 pro', 'b30 pro 5g' => 'B30 Pro',
            // sharp
            'aquos wish 3 5g', 'aquos wish3' => 'Aquos Wish 3 5G',
            // lg
            'g8 thinq', 'g8 thinq (at&t)' => 'G8 ThinQ',
            'k92', 'k92 5g' => 'K92',
            // krono
            'net alpha' => 'Net Alpha',
            'net hit' => 'Net Hit',
            // reeder
            's19 max', 's19 max 64 gb' => 'S19 Max',
            // hanson
            'flex 7000' => 'Flex 7000',
            // hafury
            'meet' => 'Meet',
            // pritom
            'm10 c01', 'm10 c01 eea' => 'M10 C01',
            // vale
            'v10e lte' => 'V10e LTE',
            // saiet
            'sicure smart', 'sicuro smart sts602' => 'Sicure Smart',
            // logicom
            'five pro', 'five pro 32' => 'Five Pro',
            // safaricom
            'neon ray ultra', 'neon ray ultra m' => 'Neon Ray Ultra',
            // unihertz
            'tank 2', '8849 tank 2' => 'Tank 2',
            // newal
            'uhd-5042', 'tv uhd-5042' => 'UHD-5042',
            // inoi
            'pad wifi', 'inoipad wi-fi+3g' => 'Pad WiFi',
            // coolpad
            'cp12p' => 'CP12p',
            // cricket
            'outlast', 'outlast 5g' => 'Outlast',
            // aligator
            'extremo', 'rx850 extremo' => 'eXtremo',
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
