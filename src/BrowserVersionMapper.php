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

use BrowserDetector\Version\Exception\NotNumericException;
use BrowserDetector\Version\NullVersion;
use BrowserDetector\Version\VersionBuilder;
use BrowserDetector\Version\VersionInterface;

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class BrowserVersionMapper
{
    /**
     * maps the browser version
     *
     * @throws NotNumericException
     *
     * @api
     */
    public function mapBrowserVersion(string | null $browserVersion): VersionInterface
    {
        if ($browserVersion === null) {
            return new NullVersion();
        }

        return match (mb_strtolower($browserVersion)) {
            '', 'unknown', 'other' => new NullVersion(),
            default => (new VersionBuilder())->set($browserVersion),
        };
    }
}
