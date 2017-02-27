<?php


namespace UaDataMapper;

use BrowserDetector\Version\Version;
use BrowserDetector\Version\VersionFactory;

/**
 * class with caching and update capabilities
 *
 * @category  ua-data-mapper
 *
 * @author    Thomas Mueller <mimmi20@live.de>
 * @copyright 2015-2017 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class BrowserVersionMapper
{
    /**
     * maps the browser version
     *
     * @param string      $browserVersion
     * @param string|null $browserName
     *
     * @return \BrowserDetector\Version\Version
     */
    public function mapBrowserVersion($browserVersion, $browserName = null)
    {
        switch (strtolower($browserVersion)) {
            case '':
            case 'unknown':
            case 'other':
                return new Version(0);
                break;
            default:
                switch (strtolower($browserName)) {
                    case '':
                    case 'unknown':
                    case 'other':
                        return new Version(0);
                        break;
                    default:
                        // nothing to do here
                        break;
                }
                break;
        }

        return VersionFactory::set($browserVersion);
    }
}
