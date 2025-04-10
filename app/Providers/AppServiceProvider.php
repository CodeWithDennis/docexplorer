<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Pan\PanConfiguration;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        PanConfiguration::allowedAnalytics([
            'discover-laravel-btn',
            'discover-filament-btn',
            'discover-livewire-btn',
            'switch-laravel-btn',
            'switch-filament-btn',
            'switch-livewire-btn',
        ]);
    }

    public function boot(): void
    {
        $this->configureModels();
    }

    private function configureModels(): void
    {
        Model::unguard();
        Model::shouldBeStrict(! app()->isProduction());
    }
}
