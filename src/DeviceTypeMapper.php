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

use UaDeviceType\Type;
use UaDeviceType\TypeInterface;

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class DeviceTypeMapper
{
    /**
     * maps the name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceType(string | null $deviceType): TypeInterface
    {
        if ($deviceType === null) {
            return Type::Unknown;
        }

        return match (mb_strtolower($deviceType)) {
            'car browser' => Type::CarEntertainmentSystem,
            'fonepad', 'fone-pad' => Type::Tablet,
            'laptop' => Type::Desktop,
            'mobileconsole', 'mobile-console', 'mobile console' => Type::Console,
            'smartwatch', 'smart-watch', 'watch' => Type::Wearable,
            'tvmediaplayer', 'tv-media-player', 'tv media player', 'tvsettopbox', 'tv-set-top-box', 'tv settop box', 'TvStick', 'tv-stick', 'TV Stick' => Type::Tv,
            'unknown' => Type::Unknown,
            default => Type::fromName(mb_strtolower($deviceType)),
        };
    }
}
