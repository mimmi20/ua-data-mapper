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
class FrameSupportMapper
{
    /**
     * maps the value for the frame/iframe support
     *
     * @param bool|string $support
     *
     * @return string
     */
    public function mapFrameSupport($support): string
    {
        switch ($support) {
            case true:
                $support = 'full';
                break;
            case false:
                $support = 'none';
                break;
            default:
                $support = (string) $support;
                break;
        }

        return $support;
    }
}
