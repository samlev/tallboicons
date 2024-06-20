<?php

declare(strict_types=1);

namespace Tallboy\Tallboicons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeTallboiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('tallboicons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'tallboicon',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-tallboicons'),
            ], 'blade-tallboicons');
        }
    }
}
