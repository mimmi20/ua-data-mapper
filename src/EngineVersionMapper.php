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
use BrowserDetector\Version\VersionBuilder;
use BrowserDetector\Version\VersionInterface;

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class EngineVersionMapper
{
    /**
     * maps the version of the operating system
     *
     * @throws NotNumericException
     *
     * @api
     */
    public function mapEngineVersion(string | null $engineVersion): VersionInterface
    {
        if ($engineVersion === null) {
            return new NullVersion();
        }

        return match (mb_strtolower($engineVersion)) {
            '', 'unknown', 'other', 'unk', '0' => new NullVersion(),
            default => (new VersionBuilder())->set($engineVersion),
        };
    }
}
