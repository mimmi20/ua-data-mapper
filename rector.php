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

use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\If_\RemoveAlwaysTrueIfConditionRector;
use Rector\DeadCode\Rector\If_\RemoveDeadInstanceOfRector;
use Rector\DeadCode\Rector\StaticCall\RemoveParentCallWithoutParentRector;
use Rector\Php84\Rector\MethodCall\NewMethodCallWithoutParenthesesRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitThisCallRector;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpVersion(PhpVersion::PHP_85)
    ->withPreparedSets(
        deadCode: true,
        codeQuality: false,
        typeDeclarations: true,
        typeDeclarationDocblocks: true,
        naming: true,
        namedArgs: true,
        instanceOf: false,
        if: true,
        earlyReturn: true,
        phpunitCodeQuality: true,
        phpunitNarrowAsserts: true,
        phpunitMockToStub: true,
    )
    ->withPhpSets(php85: true)
    ->withAttributesSets(phpunit: true)
    ->withComposerBased(phpunit: true)
    ->withSkip([
        RemoveDeadInstanceOfRector::class,
        RemoveAlwaysTrueIfConditionRector::class,
        RemoveParentCallWithoutParentRector::class,
        NewMethodCallWithoutParenthesesRector::class,
        PreferPHPUnitThisCallRector::class,
    ])
    ->withoutParallel()
    ->withMemoryLimit('2048M');
