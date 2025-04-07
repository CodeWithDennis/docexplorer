<?php

declare(strict_types=1);

use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\Config\RectorConfig;
use RectorLaravel\Rector\ClassMethod\AddGenericReturnTypeToRelationsRector;
use RectorLaravel\Rector\MethodCall\AssertStatusToAssertMethodRector;
use RectorLaravel\Rector\MethodCall\EloquentWhereRelationTypeHintingParameterRector;
use RectorLaravel\Rector\MethodCall\RedirectBackToBackHelperRector;
use RectorLaravel\Rector\PropertyFetch\ReplaceFakerInstanceWithHelperRector;
use RectorLaravel\Rector\StaticCall\EloquentMagicMethodToQueryBuilderRector;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withSets([
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_COLLECTION,
        LaravelSetList::LARAVEL_110,
        LaravelSetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL,
    ])
    ->withConfiguredRule(EloquentMagicMethodToQueryBuilderRector::class, [
        'exclude_methods' => [
            'find',
        ],
    ])
    ->withSkip([
        EncapsedStringsToSprintfRector::class,
    ])
    ->withRules([
        AssertStatusToAssertMethodRector::class,
        EloquentWhereRelationTypeHintingParameterRector::class,
        RedirectBackToBackHelperRector::class,
        ReplaceFakerInstanceWithHelperRector::class,
        AddGenericReturnTypeToRelationsRector::class,
        RectorLaravel\Rector\If_\AbortIfRector::class,
        RectorLaravel\Rector\Class_\AddExtendsAnnotationToModelFactoriesRector::class,
        RectorLaravel\Rector\Class_\AnonymousMigrationsRector::class,
        Rector\Instanceof_\Rector\Ternary\FlipNegatedTernaryInstanceofRector::class,
    ])
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/tests',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        earlyReturn: true,
        strictBooleans: true,
    )
    ->withImportNames();
