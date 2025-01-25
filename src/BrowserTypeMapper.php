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

use UaBrowserType\Type;

use function mb_strtolower;

/**
 * class with caching and update capabilities
 */
final class BrowserTypeMapper
{
    /**
     * maps the browser type
     *
     * @throws void
     *
     * @api
     */
    public function mapBrowserType(string | null $browserType): Type
    {
        if ($browserType === null) {
            return Type::fromName('unknown');
        }

        $typeKey = match (mb_strtolower($browserType)) {
            'browser', 'mobile browser' => 'browser',
            'bot', 'robot', 'bot/crawler', 'library' => 'bot',
            'emailclient', 'email client' => 'email-client',
            'pim' => 'pim',
            'feedreader', 'feed reader' => 'feed-reader',
            'multimediaplayer', 'mediaplayer', 'multimedia player' => 'multimedia-player',
            'offlinebrowser', 'offline browser' => 'offline-browser',
            'useragentanonymizer', 'useragent anonymizer' => 'useragent-anonymizer',
            'wapbrowser', 'wap browser' => 'wap-browser',
            'application', 'mobile app' => 'application',
            'tool' => 'tool',
            default => 'unknown',
        };

        return Type::fromName($typeKey);
    }
}
