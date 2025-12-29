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
final class EngineNameMapper
{
    /**
     * maps the name of the operating system
     *
     * @throws void
     *
     * @api
     */
    public function mapEngineName(string | null $engineName): string | null
    {
        if ($engineName === null) {
            return null;
        }

        return match (mb_strtolower($engineName)) {
            '', 'unknown', 'other', 'unk' => null,
            'edgehtml' => 'Edge',
            'moz' => 'Gecko',
            'text', 'text-based' => 'Text',
            default => $engineName,
        };
    }
}
