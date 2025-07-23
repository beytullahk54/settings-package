<?php

namespace Beytullahk54\SettingsPackage;

use Illuminate\Support\ServiceProvider;
use Beytullahk54\SettingsPackage\Services\SettingService;

class SettingsPackageServiceProvider extends ServiceProvider
{
    public function register(){
        //$this->mergeConfigFrom(__DIR__.'/config/settings.php', 'settings');
        
        $this->app->singleton(SettingService::class, function ($app) {
            return new SettingService();
        });
    }

    public function boot(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        //$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'settings');
    }
}