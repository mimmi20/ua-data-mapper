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
final class EngineKeyMapper
{
    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapEngineKey(string | null $engineName): string
    {
        if ($engineName === null) {
            return 'unknown';
        }

        return match (mb_strtolower($engineName)) {
            'webkit' => 'webkit',
            'gecko' => 'gecko',
            'trident' => 'trident',
            'edge' => 'edge',
            'presto' => 'presto',
            'netfront' => 'netfront',
            't5' => 't5',
            'tasman' => 'tasman',
            'khtml' => 'khtml',
            'u2' => 'u2',
            'u3' => 'u3',
            'blink' => 'blink',
            'goanna' => 'goanna',
            'clecko' => 'clecko',
            default => 'unknown',
        };
    }
}
