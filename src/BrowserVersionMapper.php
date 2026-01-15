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
            '12603.1' => $versionBuilder->set('10.0'),
            '8621.2', '8621.1', '8620.2', '8620.1', '8619.2', '8619.1', '8618.10', '8618.9', '8618.8', '8618.7', '8618.6', '8618.5', '8618.4', '8618.3', '8618.2', '8618.1', '8617.2', '8617.1', '8616.2', '8616.1', '8615.8', '8615.7', '8615.6', '8615.5', '8615.4', '8615.3', '8615.2', '8615.1', '8614.4', '8614.3', '8614.2', '8614.1', '8613.7', '8613.6', '8613.5', '8613.4', '8613.3', '8613.2', '8613.1', '8612.4', '8612.3', '8612.2', '8612.1' => $versionBuilder->set(
                '6.0',
            ),
            '604.1', '602.1', '601.1' => $versionBuilder->set('5.0'),
            '531.21', '528.16', '525.20' => $versionBuilder->set('4.0'),
            default => $versionBuilder->set($browserVersion),
        };
    }
}
