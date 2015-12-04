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

use UaResult\Version;

/**
 * class with caching and update capabilities
 *
 * @category  BrowserDetectorModule
 * @package   BrowserDetectorModule
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2014 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class EngineVersionMapper
{
    /**
     * maps the version of the operating system
     *
     * @param string $engineVersion
     *
     * @return \UaResult\Version
     */
    public function mapEngineVersion($engineVersion)
    {
        switch (strtolower($engineVersion)) {
            case '':
            case 'unknown':
            case 'other':
                $engineVersion = null;
                break;
            default:
                // nothing to do here
                break;
        }

        $version = new Version();
        $version->setMode(
            Version::COMPLETE | Version::IGNORE_MINOR_IF_EMPTY | Version::IGNORE_MICRO_IF_EMPTY
        );

        return $version->setVersion($engineVersion);
    }
}