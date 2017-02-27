<?php


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
    public function mapBrowserMaker($browserMaker, $browserName = null)
    {
        switch (strtolower($browserName)) {
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
