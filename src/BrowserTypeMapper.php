<?php

/**
 * This file is part of the mimmi20/ua-data-mapper package.
 *
 * Copyright (c) 2015-2026, Thomas Mueller <mimmi20@live.de>
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
            return Type::Unknown;
        }

        return match (mb_strtolower($browserType)) {
            'browser', 'mobile browser', 'transcoder', 'wap-browser' => Type::Browser,
            'bot', 'robot', 'bot/crawler', 'bot-trancoder' => Type::Bot,
            'library' => Type::Library,
            'feedreader', 'feed reader', 'feed fetcher' => Type::FeedReader,
            'offlinebrowser', 'offline browser' => Type::OfflineBrowser,
            'useragentanonymizer', 'useragent anonymizer' => Type::UseragentAnonymizer,
            'wapbrowser', 'wap browser' => Type::WapBrowser,
            'application', 'mobile app', 'mobile-application', 'pim', 'email-client', 'emailclient', 'email client', 'multimediaplayer', 'mediaplayer', 'multimedia player', 'multimedia-player' => Type::Application,
            'tool' => Type::Tool,
            'search bot' => Type::SearchBot,
            'social media agent' => Type::SocialMediaAgent,
            'site monitor' => Type::SiteMonitor,
            'ai search crawler', 'bot-syndication-reader' => Type::Crawler,
            'service agent' => Type::ServiceAgent,
            'unknown' => Type::Unknown,
            default => Type::fromName(mb_strtolower($browserType)),
        };
    }
}
