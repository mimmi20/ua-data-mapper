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

use BrowserDetector\Version\Exception\NotNumericException;
use BrowserDetector\Version\NullVersion;
use BrowserDetector\Version\Version;
use BrowserDetector\Version\VersionBuilder;
use BrowserDetector\Version\VersionInterface;

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class PlatformVersionMapper
{
    /**
     * maps the version of the operating system
     *
     * @throws NotNumericException
     *
     * @api
     */
    public function mapOsVersion(string | null $osVersion, string | null $osName = null): VersionInterface
    {
        if ($osVersion === null) {
            return new NullVersion();
        }

        switch (mb_strtolower($osVersion)) {
            case '':
            case 'unknown':
            case 'other':
            case '3ds':
            case 'wii':
            case 'switch':
                return new NullVersion();
            case 'server 2003':
                return new Version('5', '2');
            case 'nt 5.1':
                return new Version('5', '1');
            case 'nt 6.1':
                return new Version('7');
            case 'nt 6.2':
                return new Version('8');
            case 'nt 6.3':
                return new Version('8', '1');
            default:
                // nothing to do here
                break;
        }

        if ($osName === null) {
            return new NullVersion();
        }

        return match (mb_strtolower($osName)) {
            '', 'unknown', 'other', 'win32' => new NullVersion(),
            'winxp', 'windows xp', 'nt 5.1' => (new VersionBuilder())->set('XP'),
            'winvista', 'windows vista', 'nt 6.0' => (new VersionBuilder())->set('Vista'),
            'win7', 'winphone7', 'windows phone 7', 'windows 7', 'nt 6.1' => new Version('7'),
            'winphone7.5', 'windows phone 7.5' => new Version('7', '5'),
            'win8', 'winrt8', 'winphone8', 'windows phone 8', 'windows 8', 'nt 6.2' => new Version('8'),
            'win8.1', 'winrt8.1', 'winphone8.1', 'windows phone 8.1', 'windows 8.1', 'nt 6.3' => new Version(
                '8',
                '1',
            ),
            'win9' => new Version('9'),
            'win10', 'windows 10' => new Version('10'),
            'win2000', 'windows 2000', 'nt 5.0' => new Version('2000'),
            'win2003' => new Version('2003'),
            'win98', 'windows 98' => new Version('98'),
            'win95' => new Version('95'),
            'winnt' => (new VersionBuilder())->set('NT'),
            'winme' => (new VersionBuilder())->set('ME'),
            'win31' => new Version('3', '1'),
            'yosemite 10.10' => new Version('10', '10'),
            'mavericks 10.9' => new Version('10', '9'),
            default => (new VersionBuilder())->set($osVersion),
        };
    }
}
