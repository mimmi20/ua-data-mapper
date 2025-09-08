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
            '', 'unknown', 'other', 'iphone' => null,
            'winxp', 'win7', 'win8', 'win8.1', 'win9', 'win10', 'winvista', 'win2000', 'win2003', 'win98', 'win95', 'win31', 'win32', 'winnt', 'winme', 'windows 98', 'windows 2000', 'windows xp', 'windows vista', 'windows 7', 'windows 8', 'windows 8.1', 'windows 10', 'windows server', 'windows unknown ver', 'windows 10.0' => 'Windows',
            'winphone7', 'winphone7.5', 'winphone8', 'winphone8.1', 'windows phone', 'windows phone 7' => 'Windows Phone OS',
            'winrt8', 'winrt8.1' => 'Windows RT',
            'winmobile' => 'Windows Mobile OS',
            'wince' => 'Windows CE',
            'blackberry os' => 'RIM OS',
            'mac', 'macosx', 'os x', 'mac osx', 'mac os x', 'os x 10.12', 'os x 10.12.2', 'mac os', 'macos sierra', 'macintosh' => 'macOS',
            'jvm', 'java' => 'Java',
            'bada os' => 'Bada',
            'symbianos', 'nokia series 40', 'symbian os series 40' => 'Symbian OS',
            'gnu/linux' => 'Linux',
            'chrome os' => 'ChromeOS',
            'mint' => 'Linux Mint',
            default => $osName,
        };
    }
}
