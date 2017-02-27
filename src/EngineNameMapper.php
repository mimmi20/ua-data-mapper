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
class EngineNameMapper
{
    /**
     * maps the name of the operating system
     *
     * @param string $engineName
     *
     * @return string|null
     */
    public function mapEngineName($engineName)
    {
        switch (strtolower($engineName)) {
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
