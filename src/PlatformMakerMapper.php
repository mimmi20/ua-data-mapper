<?php
/**
 * This file is part of the ua-data-mapper package.
 *
 * Copyright (c) 2015-2017, Thomas Mueller <mimmi20@live.de>
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
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class PlatformMakerMapper
{
    /**
     * maps the maker of the operating system
     *
     * @param string      $osMaker
     * @param string|null $osName
     *
     * @return string|null
     */
    public function mapOsMaker($osMaker, $osName = null)
    {
        switch (mb_strtolower($osName)) {
            case '':
            case 'unknown':
            case 'other':
                $osMaker = null;
                break;
            default:
                $osMaker = (new MakerMapper())->mapMaker($osMaker);
                break;
        }

        return $osMaker;
    }
}
