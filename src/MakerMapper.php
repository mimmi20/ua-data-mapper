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

use function mb_strtolower;
use function mb_trim;

/**
 * class with caching and update capabilities
 */
final class MakerMapper
{
    /**
     * maps the maker of the browser, os, engine or device
     *
     * @throws void
     *
     * @api
     */
    public function mapMaker(string | null $maker): string | null
    {
        if ($maker === null) {
            return null;
        }

        return match (mb_strtolower(mb_trim($maker))) {
            '', 'unknown', 'other', 'bot', 'various' => null,
            'microsoft', 'microsoft corporation.' => 'Microsoft Corporation',
            'apple', 'apple inc.', 'apple computer, inc.' => 'Apple Inc',
            'google', 'google inc.', 'google, inc.' => 'Google Inc',
            'lunascape & co., ltd.' => 'Lunascape Corporation',
            'opera software asa.' => 'Opera Software ASA',
            'sun microsystems, inc.' => 'Oracle',
            'postbox, inc.' => 'Postbox Inc',
            'comodo group, inc.' => 'Comodo Group Inc',
            'canonical ltd.' => 'Canonical Ltd',
            'gentoo foundation, inc.' => 'Gentoo Foundation Inc',
            'omni development, inc.' => 'Omni Development Inc',
            'slackware linux, inc.' => 'Slackware Linux Inc',
            'red hat, inc.' => 'Red Hat Inc',
            'rim' => 'Research In Motion Limited',
            'mozilla' => 'Mozilla Foundation',
            'majestic-12' => 'Majestic-12 Ltd',
            'zum internet' => 'ZUMinternet Corp',
            'mojeek ltd.' => 'Linkdex Limited',
            'kddi' => 'KDDI',
            'jide', 'jedi' => 'Jide',
            'sonyericsson', 'sony ericsson' => 'SonyEricsson',
            'premier', 'premier star' => 'Premier',
            'multynet' => 'Multynet',
            'tcl', 'tcl scbc' => 'TCL',
            'texet' => 'TeXet',
            't-mobile', 'telekom' => 'T-Mobile',
            'wortmann', 'terra' => 'Wortmann',
            'qihoo 360', '360' => 'Qihoo 360',
            'a-rival', 'arival' => 'A-Rival',
            'aoyodkg' => 'Aoyodkg',
            'xiaomi', 'black shark' => 'Xiaomi',
            default => $maker,
        };
    }
}
