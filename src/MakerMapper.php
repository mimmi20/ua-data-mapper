<?php
/**
 * Copyright (c) 2012-2014, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
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
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 * @link      https://github.com/mimmi20/BrowserDetectorModule
 */

namespace UaDataMapper;

/**
 * class with caching and update capabilities
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class MakerMapper
{
    /**
     * maps the maker of the browser, os, engine or device
     *
     * @param string $maker
     *
     * @return string|null
     */
    public function mapMaker($maker)
    {
        switch (strtolower(trim($maker))) {
            case '':
            case 'unknown':
            case 'other':
            case 'bot':
            case 'various':
                $maker = null;
                break;
            case 'microsoft':
            case 'microsoft corporation.':
                $maker = 'Microsoft Corporation';
                break;
            case 'apple':
            case 'apple inc.':
            case 'apple computer, inc.':
                $maker = 'Apple Inc';
                break;
            case 'google':
            case 'google inc.':
            case 'google, inc.':
                $maker = 'Google Inc';
                break;
            case 'lunascape & co., ltd.':
                $maker = 'Lunascape Corporation';
                break;
            case 'opera software asa.':
                $maker = 'Opera Software ASA';
                break;
            case 'sun microsystems, inc.':
                $maker = 'Oracle';
                break;
            case 'postbox, inc.':
                $maker = 'Postbox Inc';
                break;
            case 'comodo group, inc.':
                $maker = 'Comodo Group Inc';
                break;
            case 'canonical ltd.':
                $maker = 'Canonical Ltd';
                break;
            case 'gentoo foundation, inc.':
                $maker = 'Gentoo Foundation Inc';
                break;
            case 'omni development, inc.':
                $maker = 'Omni Development Inc';
                break;
            case 'slackware linux, inc.':
                $maker = 'Slackware Linux Inc';
                break;
            case 'red hat, inc.':
                $maker = 'Red Hat Inc';
                break;
            case 'rim':
                $maker = 'Research In Motion Limited';
                break;
            case 'mozilla':
                $maker = 'Mozilla Foundation';
                break;
            case 'majestic-12':
                $maker = 'Majestic-12 Ltd';
                break;
            case 'zum internet':
                $maker = 'ZUMinternet Corp';
                break;
            case 'mojeek ltd.':
                $maker = 'Linkdex Limited';
                break;
            default:
                // nothing to do here
                break;
        }

        return $maker;
    }
}
