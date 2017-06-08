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

use Psr\Cache\CacheItemPoolInterface;
use UaDeviceType\TypeLoader;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class DeviceTypeMapper
{
    /**
     * maps the name of a device
     *
     * @param \Psr\Cache\CacheItemPoolInterface $cache
     * @param string                            $deviceType
     *
     * @return \UaDeviceType\TypeInterface
     */
    public function mapDeviceType(CacheItemPoolInterface $cache, $deviceType)
    {
        if (null === $deviceType) {
            return (new TypeLoader($cache))->load('unknown');
        }

        switch (mb_strtolower($deviceType)) {
            case 'smart-tv':
            case 'tv device':
                $typeKey = 'tv';
                break;
            case 'desktop':
                $typeKey = 'desktop';
                break;
            case 'fonepad':
                $typeKey = 'fone-pad';
                break;
            case 'tablet':
                $typeKey = 'tablet';
                break;
            case 'mobile device':
                $typeKey = 'mobile-device';
                break;
            case 'mobile phone':
                $typeKey = 'mobile-phone';
                break;
            case 'smartphone':
                $typeKey = 'smartphone';
                break;
            case 'feature phone':
                $typeKey = 'feature-phone';
                break;
            case 'digital camera':
                $typeKey = 'digital-camera';
                break;
            default:
                $typeKey = 'unknown';
                break;
        }

        return (new TypeLoader($cache))->load($typeKey);
    }
}
