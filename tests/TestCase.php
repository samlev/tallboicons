<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Tallboy\Tallboicons\BladeTallboiconsServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeTallboiconsServiceProvider::class,
        ];
    }
}
