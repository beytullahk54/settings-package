<?php

namespace Beytullahk54\SettingsPackage\Facades;

use Illuminate\Support\Facades\Facade;
use Beytullahk54\SettingsPackage\Services\SettingService;

class SettingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SettingService::class;
    }
}
