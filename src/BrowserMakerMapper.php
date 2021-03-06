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
class BrowserMakerMapper
{
    /**
     * maps the browser maker
     *
     * @param string      $browserMaker
     * @param string|null $browserName
     *
     * @return string|null
     */
    public function mapBrowserMaker(string $browserMaker, ?string $browserName = null): ?string
    {
        if (null === $browserName) {
            return null;
        }

        switch (mb_strtolower($browserName)) {
            case 'unknown':
            case 'other':
            case '':
                $browserMaker = null;
                break;
            default:
                $browserMaker = (new MakerMapper())->mapMaker($browserMaker);
                break;
        }

        return $browserMaker;
    }
}
