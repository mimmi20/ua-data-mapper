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
            return Type::fromName('unknown');
        }

        $typeKey = match (mb_strtolower($deviceType)) {
            'smart-tv', 'tv device' => 'tv',
            'desktop' => 'desktop',
            'fonepad' => 'fone-pad',
            'tablet' => 'tablet',
            'mobile device' => 'mobile-device',
            'mobile phone' => 'mobile-phone',
            'smartphone' => 'smartphone',
            'feature phone' => 'feature-phone',
            'digital camera' => 'digital-camera',
            default => 'unknown',
        };

        return Type::fromName($typeKey);
    }
}
