<?php
/**
 * This file is part of the ua-data-mapper package.
 *
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaDataMapper;

use BrowserDetector\Version\Version;
use BrowserDetector\Version\VersionFactory;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class EngineVersionMapper
{
    /**
     * maps the version of the operating system
     *
     * @param string $engineVersion
     *
     * @return \BrowserDetector\Version\Version
     */
    public function mapEngineVersion($engineVersion)
    {
        if (null === $engineVersion) {
            return new Version(0);
        }

        switch (mb_strtolower($engineVersion)) {
            case '':
            case 'unknown':
            case 'other':
                return new Version(0);
                break;
            default:
                // nothing to do here
                break;
        }

        return VersionFactory::set($engineVersion);
    }
}
