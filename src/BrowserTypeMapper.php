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

use UaBrowserType\Type as BrowserType;

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
    public function mapBrowserType(string | null $browserType): BrowserType
    {
        if ($browserType === null) {
            return BrowserType::Unknown;
        }

        return match (mb_strtolower($browserType)) {
            'browser', 'mobile browser', 'transcoder', 'wap-browser' => BrowserType::Browser,
            'bot', 'robot', 'bot/crawler', 'bot-trancoder' => BrowserType::Bot,
            'library' => BrowserType::Library,
            'feedreader', 'feed reader', 'feed fetcher', 'feed parser' => BrowserType::FeedReader,
            'offlinebrowser', 'offline browser', 'read-it-later service' => BrowserType::OfflineBrowser,
            'useragentanonymizer', 'useragent anonymizer' => BrowserType::UseragentAnonymizer,
            'wapbrowser', 'wap browser' => BrowserType::WapBrowser,
            'application', 'mobile app', 'mobile-application', 'pim', 'email-client', 'emailclient', 'email client', 'multimediaplayer', 'mediaplayer', 'multimedia player', 'multimedia-player' => BrowserType::Application,
            'tool', 'search tools', 'benchmark' => BrowserType::Tool,
            'search bot' => BrowserType::SearchBot,
            'social media agent' => BrowserType::SocialMediaAgent,
            'site monitor' => BrowserType::SiteMonitor,
            'ai search crawler', 'bot-syndication-reader', 'ai data scraper', 'seo-analytics', 'ai assistant' => BrowserType::Crawler,
            'service agent', 'service bot', 'ai agent' => BrowserType::ServiceAgent,
            'security checker', 'security search bot', 'security-search-bot' => BrowserType::SecurityChecker,
            'unknown' => BrowserType::Unknown,
            default => BrowserType::fromName(mb_strtolower($browserType)),
        };
    }
}
