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

        $versionBuilder = new VersionBuilder();

        return match (mb_strtolower($browserVersion)) {
            '', 'unknown', 'other' => new NullVersion(),
            '8618.1', '8617.2', '8617.1', '8616.2', '8615.6', '8615.5', '8615.4', '8613.7', '8613.1', '8612.4', '8612.3', '8612.2', '8612.1' => $versionBuilder->set(
                '6.0',
            ),
            '604.1' => $versionBuilder->set('5.0'),
            default => $versionBuilder->set($browserVersion),
        };
    }
}
