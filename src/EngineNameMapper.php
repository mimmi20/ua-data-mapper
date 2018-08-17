<?php
/**
 * This file is part of the ua-data-mapper package.
 *
 * Copyright (c) 2015-2018, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaDataMapper;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class EngineNameMapper
{
    /**
     * maps the name of the operating system
     *
     * @param string|null $engineName
     *
     * @return string|null
     */
    public function mapEngineName(?string $engineName): ?string
    {
        if (null === $engineName) {
            return null;
        }

        switch (mb_strtolower($engineName)) {
            case '':
            case 'unknown':
            case 'other':
                $engineName = null;
                break;
            default:
                // nothing to do here
                break;
        }

        return $engineName;
    }
}
