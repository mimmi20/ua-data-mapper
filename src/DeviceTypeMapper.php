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

use UaDeviceType\Type as DeviceType;

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
    public function mapDeviceType(string | null $deviceType): DeviceType
    {
        if ($deviceType === null) {
            return DeviceType::Unknown;
        }

        return match (mb_strtolower($deviceType)) {
            'car browser' => DeviceType::CarEntertainmentSystem,
            'fonepad', 'fone-pad', 'ebookreader', 'ebook-reader', 'ebook reader' => DeviceType::Tablet,
            'laptop' => DeviceType::Desktop,
            'mobileconsole', 'mobile-console', 'mobile console', 'tv-console' => DeviceType::Console,
            'smartwatch', 'smart-watch', 'watch' => DeviceType::Wearable,
            'tvmediaplayer', 'tv-media-player', 'tv media player', 'tvsettopbox', 'tv-set-top-box', 'tv settop box', 'tvstick', 'tv-stick', 'tv stick' => DeviceType::Tv,
            'unknown' => DeviceType::Unknown,
            'phablet', 'featurephone', 'feature-phone', 'feature phone', 'mobilephone', 'mobile-phone', 'mobile phone', 'smartphone' => DeviceType::Phone,
            'camera' => DeviceType::DigitalCamera,
            'smartdisplay', 'smart-display', 'smart display' => DeviceType::SmartSpeaker,
            'fridgefreezer', 'fridge-freezer', 'fridge freezer' => DeviceType::Peripheral,
            default => DeviceType::fromName(mb_strtolower($deviceType)),
        };
    }
}
