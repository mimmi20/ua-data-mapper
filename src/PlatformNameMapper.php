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

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class PlatformNameMapper
{
    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapOsName(string | null $osName): string | null
    {
        if ($osName === null) {
            return null;
        }

        return match (mb_strtolower($osName)) {
            '', 'unknown', 'other', 'iphone', 'ipad' => null,
            'mac os' => 'macOS',
            'gnu/linux', 'ventana linux' => 'Linux',
            'slackware linux', 'slackware' => 'Slackware Linux',
            'blackberry tablet os', 'rim tablet os' => 'BlackBerry Tablet OS',
            'chinese operating system', 'china os' => 'Chinese Operating System',
            'nintendo os', 'nintendo', 'nintendo mobile', 'nintendo switch os', 'nintendo wii os' => 'Nintendo OS',
            'yun os', 'yunos' => 'Yun OS',
            default => $osName,
        };
    }
}
