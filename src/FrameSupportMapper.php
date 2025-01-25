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

/**
 * class with caching and update capabilities
 */
final class FrameSupportMapper
{
    /**
     * maps the value for the frame/iframe support
     *
     * @throws void
     *
     * @api
     */
    public function mapFrameSupport(bool | string $support): string
    {
        return match ($support) {
            true => 'full',
            false => 'none',
            default => $support,
        };
    }
}
