<?php

namespace Astrogoat\Posthog;

use Astrogoat\Posthog\Settings\PosthogSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Spatie\LaravelPackageTools\Package;

class PosthogServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('posthog')
            ->settings(PosthogSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->includeFrontendViews(function (IncludeFrontendViews $frontendViews) {
                return $frontendViews->addToEnd('posthog::script');
            })->publishOnInstall(['posthog:assets']);
    }

    public function configurePackage(Package $package): void
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/posthog'),
        ], 'posthog:assets');

        $package->name('posthog')->hasConfigFile()->hasViews();
    }
}
