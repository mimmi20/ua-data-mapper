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
final class PlatformKeyMapper
{
    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapPlatformKey(string | null $osVersion, string | null $platform = null): string
    {
        if ($osVersion === null) {
            return 'unknown';
        }

        switch (mb_strtolower($osVersion)) {
            case '':
            case 'unknown':
            case 'other':
                return 'unknown';
            case 'server 2003':
                return 'windows 2003';
            case 'nt 5.1':
                return 'windows nt 5.1';
            case 'nt 5.2':
                return 'windows nt 5.2';
            case 'nt 5.3':
                return 'windows nt 5.3';
            case 'nt 6.0':
                return 'windows nt 6.0';
            case 'nt 6.1':
                return 'windows nt 6.1';
            case 'nt 6.2':
                return 'windows nt 6.2';
            case 'nt 6.3':
                return 'windows nt 6.3';
            default:
                // nothing to do here
                break;
        }

        if ($platform === null) {
            return 'unknown';
        }

        switch (mb_strtolower($platform)) {
            case 'winxp':
            case 'windows xp':
                return match (mb_strtolower($osVersion)) {
                    '5.1' => 'windows nt 5.1',
                    '5.2' => 'windows nt 5.2',
                    default => 'windows nt 5.1',
                };
            case 'win7':
            case 'windows 7':
                return 'windows nt 6.1';
            case 'win8':
            case 'windows 8':
                return 'windows nt 6.2';
            case 'win8.1':
            case 'windows 8.1':
                return 'windows nt 6.3';
            case 'winvista':
            case 'windows vista':
                return 'windows nt 6.0';
            case 'win2003':
                return 'windows 2003';
            case 'win98':
            case 'windows 98':
                return 'windows 98';
            case 'win95':
                return 'windows 95';
            case 'win2000':
            case 'windows 2000':
                return match (mb_strtolower($osVersion)) {
                    '5.01' => 'windows nt 5.01',
                    '5.0' => 'windows nt 5.0',
                    default => 'windows nt 5.0',
                };
            case 'winme':
                return 'windows me';
            case 'win9':
            case 'win10':
            case 'windows 10':
                return match (mb_strtolower($osVersion)) {
                    '6.4' => 'windows nt 6.4',
                    '10.0' => 'windows nt 10.0',
                    default => 'windows nt 10.0',
                };
            case 'win31':
                if (mb_strtolower($osVersion) === '3.11') {
                    return 'windows 3.11';
                }

                return 'windows 3.1';
            case 'wince':
                return 'windows ce';
            case 'winnt':
                return match (mb_strtolower($osVersion)) {
                    '3.1' => 'windows nt 3.1',
                    '3.5' => 'windows nt 3.5',
                    '4.0' => 'windows nt 4.0',
                    '4.1' => 'windows nt 4.1',
                    default => 'windows nt',
                };
            case 'winrt8':
                return 'windows nt 6.2; arm';
            case 'winrt8.1':
                return 'windows nt 6.3; arm';
            case 'winphone':
            case 'winphone6':
            case 'winphone7':
            case 'winphone7.5':
            case 'winphone7.10':
            case 'winphone8':
            case 'winphone8.1':
            case 'winphone10':
            case 'windows phone':
            case 'windows phone 7':
                return 'windows phone';
            case 'winmobile':
                return 'windows mobile os';
            case 'win32':
            case 'win16':
            case 'windows server':
                return 'windows';
            case 'rim os':
            case 'blackberry os':
                return 'rim os';
            case 'rim tablet os':
                return 'rim tablet os';
            case 'mac':
            case 'macosx':
            case 'os x':
            case 'mac osx':
                return 'mac os x';
            case 'macppc':
            case 'mac68k':
                return 'macintosh';
            case 'ios':
                return 'ios';
            case 'centos':
                return 'cent os linux';
            case 'jvm':
            case 'java':
                return 'java';
            case 'bada':
            case 'bada os':
                return 'bada';
            case 'brew':
                return 'brew';
            case 'webos':
                return 'webos';
            case 'symbianos':
                return 'symbian';
            case 'darwin':
                return 'darwin';
            case 'aix':
                return 'aix';
            case 'beos':
                return 'beos';
            case 'cygwin':
                return 'cygwin';
            case 'risc os':
                return 'risc os';
            case 'tru64 unix':
                return 'tru64 unix';
            case 'nokia series 40':
            case 'symbian os series 40':
                return 'nokia os';
            case 'gnu/linux':
            case 'linux':
                return 'linux';
            case 'unix':
                return 'unix';
            case 'debian':
                return 'debian';
            case 'ubuntu':
                return 'ubuntu';
            case 'chrome os':
            case 'chromeos':
                return 'chromeos';
            case 'mint':
                return 'linux mint';
            case 'android':
                return 'android';
            case 'hp-ux':
                return 'hp-ux';
            case 'bsd':
                return 'bsd';
            case 'freebsd':
                return 'freebsd';
            case 'openbsd':
                return 'openbsd';
            case 'netbsd':
                return 'netbsd';
            case 'dragonfly bsd':
                return 'dragonfly bsd';
            case 'sunos':
                return 'sunos';
            case 'solaris':
                return 'solaris';
            case 'irix64':
                return 'irix';
            case 'os/2':
                return 'os/2';
            case 'meego':
                return 'meego';
            case 'maemo':
                return 'linux smartphone os (maemo)';
            case 'tizen':
                return 'tizen';
            case 'openvms':
                return 'openvms';
            case 'firefoxos':
            case 'firefox os':
                return 'firefoxos';
            case 'palmos':
                return 'palmos';
            case 'amiga os':
                return 'amiga os';
            case 'cellos':
                return 'cellos';
            case 'wyderos':
                return 'wyderos';
            case 'liberate':
                return 'liberate';
            case 'sailfishos':
                return 'sailfishos';
            case 'syllable':
                return 'syllable';
            case 'inferno os':
                return 'inferno os';
            case 'miui os':
                return 'miui os';
            default:
                return 'unknown';
        }
    }
}
