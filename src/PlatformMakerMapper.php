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
final class PlatformMakerMapper
{
    /**
     * maps the maker of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapOsMaker(string $osMaker, string | null $osName = null): string | null
    {
        if ($osName === null) {
            return null;
        }

        return match (mb_strtolower($osName)) {
            '', 'unknown', 'other' => null,
            default => (new MakerMapper())->mapMaker($osMaker),
        };
    }
}
