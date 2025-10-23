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
            'htc corporation', 'ht', 'htc' => 'HTC',
            'au', 'asus' => 'Asus',
            'sa', 'samsung' => 'Samsung',
            'so', 'sony' => 'Sony',
            'rm', 'blackberry', 'rim', 'black-berry' => 'BlackBerry',
            'nk', 'nokia' => 'Nokia',
            'ac', 'acer' => 'Acer',
            'go', 'google' => 'Google',
            'le', 'md', 'lenovo' => 'Lenovo',
            'mr', 'motorola' => 'Motorola',
            'kn', 'amazon' => 'Amazon',
            'hu', 'huawei' => 'Huawei',
            'ni', 'nintendo' => 'Nintendo',
            'ap', 'apple inc', 'apple' => 'Apple',
            'al', 'alcatel' => 'Alcatel',
            'mb', 'mobistel' => 'Mobistel',
            'wi', 'wiko' => 'Wiko',
            'xi', 'xiaomi' => 'Xiaomi',
            'ar', 'archos' => 'Archos',
            'kz', 'kazam' => 'KAZAM',
            'ms', 'microsoft' => 'Microsoft',
            'mi', 'micromax' => 'Micromax',
            'philips' => 'Philips',
            'ulefone' => 'Ulefone',
            'vivo' => 'Vivo',
            'oppo' => 'OPPO',
            'oneplus' => 'OnePlus',
            'realme' => 'Realme',
            'infinix' => 'Infinix',
            'zte' => 'ZTE',
            'oukitel' => 'Oukitel',
            'tecno', 'tecno mobile' => 'Tecno',
            'vasoun' => 'VASOUN',
            'teclast' => 'Teclast',
            'bmax' => 'BMAX',
            'nothing', 'nothing-phone' => 'Nothing',
            'hmd-global', 'hmd' => 'HMD Global',
            'oscal' => 'OSCAL',
            'doogee' => 'Doogee',
            'nubia' => 'Nubia',
            'blackview' => 'Blackview',
            'cubot' => 'CUBOT',
            'f150', 'iiif150' => 'iiiF150',
            'poco' => 'POCO',
            'meizu' => 'Meizu',
            'cmf' => 'CMF',
            'tcl' => 'TCL',
            'pritom' => 'Pritom',
            'itel' => 'iTel',
            'casper' => 'Casper',
            'unihertz' => 'Unihertz',
            'zuum' => 'Zuum',
            'digma' => 'Digma',
            'onn' => 'ONN',
            'agm' => 'AGM',
            'fujitsu' => 'Fujitsu',
            'kalley' => 'Kalley',
            'lt mobile', 'lt-mobile' => 'LT Mobile',
            'meta' => 'Meta',
            'acd' => 'ACD',
            'alldocube' => 'AllDocube',
            'gtx' => 'GTX',
            'kenshi' => 'KENSHI',
            'lunnen' => 'LUNNEN',
            'ajib' => 'Ajib',
            'corn' => 'CORN',
            'reeder' => 'Reeder',
            'fossibot', 'fossi-bot' => 'FOSSiBOT',
            'sharp' => 'Sharp',
            'symphony' => 'Symphony',
            'cricket' => 'Cricket',
            'logic' => 'Logic',
            't-mobile' => 'T-Mobile',
            'atmpc' => 'ATMPC',
            'globalsec', 'global-sec' => 'GlobalSec',
            'stylo' => 'Stylo',
            'blu' => 'Blu',
            'hammer' => 'Hammer',
            'jambo' => 'Jambo',
            'krüger&matz', 'kruger-matz' => 'Krüger&Matz',
            'vitumi' => 'Vitumi',
            'homatics' => 'Homatics',
            'pixus' => 'Pixus',
            'n-one' => 'N-one',
            'tibuta' => 'Tibuta',
            'xb' => 'XB',
            'ziovo' => 'ZIOVO',
            'qiuwoky' => 'Qiuwoky',
            'colorroom' => 'COLORROOM',
            'hometech' => 'Hometech',
            'premier' => 'Premier',
            'umidigi', 'umi' => 'UMIDIGI',
            'logicom' => 'Logicom',
            'walton' => 'Walton',
            'at&t', 'at-t' => 'AT&T',
            'm-horse' => 'M-Horse',
            'general mobile', 'general-mobile' => 'General Mobile',
            'hotwav' => 'Hotwav',
            'kgtel' => 'KGTEL',
            'volla' => 'Volla',
            'mortal' => 'MORTAL',
            'homii' => 'HOMII',
            'villaon' => 'VILLAON',
            'maxwest' => 'Maxwest',
            'trecfone' => 'Trecfone',
            'aligator' => 'Aligator',
            'vgo tel', 'vgo-tel' => 'VGO TEL',
            'atozee' => 'Atozee',
            'wopad' => 'Wopad',
            'dcode' => 'Dcode',
            'novey' => 'Novey',
            'sparx' => 'Sparx',
            'vocal' => 'VOCAL',
            'sky' => 'Sky',
            'toscido' => 'TOSCIDO',
            'oysters' => 'Oysters',
            'chuwi' => 'Chuwi',
            'biegedy' => 'Biegedy',
            'dish', 'boost-mobile' => 'DISH',
            'ace' => 'Ace',
            'cepter' => 'CEPTER',
            'headwolf', 'head-wolf' => 'HeadWolf',
            'padpro' => 'Padpro',
            'energizer' => 'Energizer',
            'nuu mobile', 'nuu-mobile' => 'NUU Mobile',
            'lava' => 'Lava',
            'xreal' => 'XREAL',
            'ihunt' => 'iHunt',
            'kyocera' => 'Kyocera',
            'vortex' => 'Vortex',
            'm-kopa' => 'M-KOPA',
            'lg' => 'LG',
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
