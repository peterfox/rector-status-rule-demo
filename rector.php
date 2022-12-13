<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/tests',
    ]);

    $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon');
    $rectorConfig->rule(\RectorLaravel\Rector\MethodCall\AssertStatusToAssertMethodRector::class);
};
