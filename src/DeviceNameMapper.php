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

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class DeviceNameMapper
{
    /**
     * maps the name of a device
     *
     * @throws void
     *
     * @api
     */
    public function mapDeviceName(string | null $deviceName): string | null
    {
        if ($deviceName === null) {
            return null;
        }

        return match (mb_strtolower($deviceName)) {
            '', 'pc', 'unknown', 'other' => null,
            'tf300t', 'transformer pad tf300t' => 'TF300T',
            'gr500' => 'Gr500',
            '50u6305/43i', '50u6305' => '50U6305',
            'sch-r900', 'sam-r900' => 'SCH-R900',
            'sch-r640', 'sam-r640' => 'SCH-R640',
            'sm-t255a' => 'SM-T255A',
            default => $deviceName,
        };
    }
}
