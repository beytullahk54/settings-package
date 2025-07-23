<?php

namespace Beytullahk54\SettingsPackage\Services;

use Beytullahk54\SettingsPackage\Models\Setting;

class SettingService
{
    public function getSetting($key)
    {
        return Setting::where('key', $key)->first()->value ?? null;
    }

    public function setSetting($key, $value)
    {
        return Setting::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
