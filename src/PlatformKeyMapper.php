<?php
/**
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetectorModule
 */

namespace UaDataMapper;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class PlatformKeyMapper
{
    /**
     * maps the name of the operating system
     *
     * @param string $osVersion
     * @param string $platform
     *
     * @return string|null
     */
    public function mapPlatformKey($osVersion, $platform = null)
    {
        switch (strtolower($osVersion)) {
            case '':
            case 'unknown':
            case 'other':
                return 'unknown';
                break;
            case 'server 2003':
                return 'windows 2003';
                break;
            case 'nt 5.1':
                return 'windows nt 5.1';
                break;
            case 'nt 5.2':
                return 'windows nt 5.2';
                break;
            case 'nt 5.3':
                return 'windows nt 5.3';
                break;
            case 'nt 6.0':
                return 'windows nt 6.0';
                break;
            case 'nt 6.1':
                return 'windows nt 6.1';
                break;
            case 'nt 6.2':
                return 'windows nt 6.2';
                break;
            case 'nt 6.3':
                return 'windows nt 6.3';
                break;
            default:
                // nothing to do here
                break;
        }

        switch (strtolower($platform)) {
            case '':
            case 'unknown':
            case 'other':
                return 'unknown';
                break;
            case 'winxp':
            case 'windows xp':
                switch (strtolower($osVersion)) {
                    case '5.1':
                        return 'windows nt 5.1';
                        break;
                    case '5.2':
                        return 'windows nt 5.2';
                        break;
                    default:
                        // do nothing
                }

                return 'windows nt 5.1';
                break;
            case 'win7':
            case 'windows 7':
                return 'windows nt 6.1';
                break;
            case 'win8':
            case 'windows 8':
                return 'windows nt 6.2';
                break;
            case 'win8.1':
            case 'windows 8.1':
                return 'windows nt 6.3';
                break;
            case 'winvista':
            case 'windows vista':
                return 'windows nt 6.0';
                break;
            case 'win2003':
                return 'windows 2003';
                break;
            case 'win98':
            case 'windows 98':
                return 'windows 98';
                break;
            case 'win95':
                return 'windows 95';
                break;
            case 'win2000':
            case 'windows 2000':
                switch (strtolower($osVersion)) {
                    case '5.01':
                        return 'windows nt 5.01';
                        break;
                    case '5.0':
                        return 'windows nt 5.0';
                        break;
                    default:
                        // do nothing
                }

                return 'windows nt 5.0';
                break;
            case 'winme':
                return 'windows me';
                break;
            case 'win9':
            case 'win10':
            case 'windows 10':
                switch (strtolower($osVersion)) {
                    case '6.4':
                        return 'windows nt 6.4';
                        break;
                    case '10.0':
                        return 'windows nt 10.0';
                        break;
                    default:
                        // do nothing
                }

                return 'windows nt 10.0';
                break;
            case 'win31':
                if ('3.11' === strtolower($osVersion)) {
                    return 'windows 3.11';
                }

                return 'windows 3.1';
                break;
            case 'wince':
                return 'windows ce';
                break;
            case 'winnt':
                switch (strtolower($osVersion)) {
                    case '3.1':
                        return 'windows nt 3.1';
                        break;
                    case '3.5':
                        return 'windows nt 3.5';
                        break;
                    case '4.0':
                        return 'windows nt 4.0';
                        break;
                    case '4.1':
                        return 'windows nt 4.1';
                        break;
                    default:
                        // do nothing
                }

                return 'windows nt';
                break;
            case 'winrt8':
                return 'windows nt 6.2; arm';
                break;
            case 'winrt8.1':
                return 'windows nt 6.3; arm';
                break;
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
                break;
            case 'winmobile':
                return 'windows mobile os';
                break;
            case 'win32':
            case 'win16':
            case 'windows server':
                return 'windows';
                break;
            case 'rim os':
            case 'blackberry os':
                return 'rim os';
                break;
            case 'rim tablet os':
                return 'rim tablet os';
                break;
            case 'mac':
            case 'macosx':
            case 'os x':
            case 'mac osx':
                return 'mac os x';
                break;
            case 'macppc':
            case 'mac68k':
                return 'macintosh';
                break;
            case 'ios':
                return 'ios';
                break;
            case 'centos':
                return 'cent os linux';
                break;
            case 'jvm':
            case 'java':
                return 'java';
                break;
            case 'bada':
            case 'bada os':
                return 'bada';
                break;
            case 'brew':
                return 'brew';
                break;
            case 'webos':
                return 'webos';
                break;
            case 'symbianos':
                return 'symbian';
                break;
            case 'darwin':
                return 'darwin';
                break;
            case 'aix':
                return 'aix';
                break;
            case 'beos':
                return 'beos';
                break;
            case 'cygwin':
                return 'cygwin';
                break;
            case 'risc os':
                return 'risc os';
                break;
            case 'tru64 unix':
                return 'tru64 unix';
                break;
            case 'nokia series 40':
            case 'symbian os series 40':
                return 'nokia os';
                break;
            case 'gnu/linux':
            case 'linux':
                return 'linux';
                break;
            case 'unix':
                return 'unix';
                break;
            case 'debian':
                return 'debian';
                break;
            case 'ubuntu':
                return 'ubuntu';
                break;
            case 'chrome os':
            case 'chromeos':
                return 'chromeos';
                break;
            case 'mint':
                return 'linux mint';
                break;
            case 'android':
                return 'android';
                break;
            case 'hp-ux':
                return 'hp-ux';
                break;
            case 'bsd':
                return 'bsd';
                break;
            case 'freebsd':
                return 'freebsd';
                break;
            case 'openbsd':
                return 'openbsd';
                break;
            case 'netbsd':
                return 'netbsd';
                break;
            case 'dragonfly bsd':
                return 'dragonfly bsd';
                break;
            case 'sunos':
                return 'sunos';
                break;
            case 'solaris':
                return 'solaris';
                break;
            case 'irix64':
                return 'irix';
                break;
            case 'os/2':
                return 'os/2';
                break;
            case 'meego':
                return 'meego';
                break;
            case 'maemo':
                return 'linux smartphone os (maemo)';
                break;
            case 'tizen':
                return 'tizen';
                break;
            case 'openvms':
                return 'openvms';
                break;
            case 'firefoxos':
                return 'firefoxos';
                break;
            case 'palmos':
                return 'palmos';
                break;
            case 'amiga os':
                return 'amiga os';
                break;
            case 'cellos':
                return 'cellos';
                break;
            case 'wyderos':
                return 'wyderos';
                break;
            case 'liberate':
                return 'liberate';
                break;
            case 'sailfishos':
                return 'sailfishos';
                break;
            case 'syllable':
                return 'syllable';
                break;
            case 'inferno os':
                return 'inferno os';
                break;
            case 'miui os':
                return 'miui os';
                break;
            default:
                // nothing to do here
                break;
        }

        return 'unknown';
    }
}
