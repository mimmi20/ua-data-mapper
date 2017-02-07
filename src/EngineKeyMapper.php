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
class EngineKeyMapper
{
    /**
     * maps the name of the operating system
     *
     * @param string $engineName
     *
     * @return string|null
     */
    public function mapEngineKey($engineName)
    {
        switch (strtolower($engineName)) {
            case '':
            case 'unknown':
            case 'other':
                return 'unknown';
                break;
            case 'webkit':
                return 'webkit';
                break;
            case 'gecko':
                return 'gecko';
                break;
            case 'trident':
                return 'trident';
                break;
            case 'edge':
                return 'edge';
                break;
            case 'presto':
                return 'presto';
                break;
            case 'netfront':
                return 'netfront';
                break;
            case 't5':
                return 't5';
                break;
            case 'tasman':
                return 'tasman';
                break;
            case 'khtml':
                return 'khtml';
                break;
            case 'u2':
                return 'u2';
                break;
            case 'u3':
                return 'u3';
                break;
            case 'blink':
                return 'blink';
                break;
            case 'goanna':
                return 'goanna';
                break;
            case 'clecko':
                return 'clecko';
                break;
            default:
                // nothing to do here
                break;
        }

        return 'unknown';
    }
}
