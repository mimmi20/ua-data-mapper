<?php

/**
 * This file is part of the mimmi20/ua-data-mapper package.
 *
 * Copyright (c) 2015-2026, Thomas Mueller <mimmi20@live.de>
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
final class PlatformNameMapper
{
    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapOsName(string | null $osName): string | null
    {
        if ($osName === null) {
            return null;
        }

        return match (mb_strtolower($osName)) {
            '', 'unknown', 'other', 'iphone', 'ipad' => null,
            'mac os', 'mac', 'macintosh', 'mac os x' => 'macOS',
            'gnu/linux', 'ventana linux', 'moblin' => 'Linux',
            'slackware linux', 'slackware' => 'Slackware Linux',
            'suse linux', 'suse' => 'Suse Linux',
            'opensuse' => 'openSuse',
            'redhat linux', 'red hat' => 'Redhat Linux',
            'linux mint', 'mint' => 'Linux Mint',
            'mandriva linux', 'mandriva' => 'Mandriva Linux',
            'gentoo linux', 'gentoo' => 'Gentoo Linux',
            'fedora linux', 'fedora' => 'Fedora Linux',
            'cent os linux', 'centos' => 'Cent OS Linux',
            'archlinux', 'arch linux' => 'ArchLinux',
            'zenwalk gnu linux', 'zenwalk' => 'Zenwalk GNU Linux',
            'backtrack linux', 'backtrack' => 'BackTrack Linux',
            'debian', 'debian with freebsd kernel' => 'Debian',
            'blackberry os', 'rim os' => 'BlackBerry OS',
            'blackberry tablet os', 'rim tablet os' => 'BlackBerry Tablet OS',
            'chinese operating system', 'china os' => 'Chinese Operating System',
            'nintendo os', 'nintendo', 'nintendo mobile', 'nintendo switch os', 'nintendo wii os' => 'Nintendo OS',
            'yun os', 'yunos' => 'Yun OS',
            'palmos' => 'PalmOS',
            'sailfishos', 'sailfish os' => 'SailfishOS',
            'inferno os', 'inferno' => 'Inferno OS',
            'chromeos', 'chrome os' => 'ChromeOS',
            'dragonfly bsd', 'dragonfly' => 'DragonFly BSD',
            'raspbian', 'raspberry pi os' => 'Raspbian',
            'osf/1', 'osf1' => 'OSF/1',
            'lindows', 'lindowsos' => 'LindowsOS',
            'yi', 'baidu yi' => 'Yi',
            'android', 'android opensource project' => 'Android',
            'series 40', 'symbian os series 40' => 'Series 40',
            'series 60', 'symbian os series 60' => 'Series 60',
            'symbian', 'symbian^3', 'symbian os' => 'Symbian',
            'nucleus os', 'mtk / nucleus' => 'Nucleus OS',
            'amiga os', 'amigaos' => 'Amiga OS',
            'windows', 'windows nt' => 'Windows',
            'ios', 'iphone os' => 'iOS',
            'solaris', 'sunos' => 'Solaris',
            'windows mobile', 'windows phone os', 'windows phone' => 'Windows Mobile',
            default => $osName,
        };
    }
}
