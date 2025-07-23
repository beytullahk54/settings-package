<?php

namespace Beytullahk54\SettingsPackage\Facades;

use Beytullahk54\SettingsPackage\Services\SettingService;

class SettingFacade
{
    protected static function getFacadeAccessor()
    {
        return SettingService::class;
    }

    public static function getSetting($key)
    {
        return static::getFacadeRoot()->getSetting($key);
    }

    public static function setSetting($key, $value) 
    {
        return static::getFacadeRoot()->setSetting($key, $value);
    }
}
