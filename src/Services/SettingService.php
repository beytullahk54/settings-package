<?php

namespace Beytullahk54\SettingsPackage\Services;

use Beytullahk54\SettingsPackage\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingService
{
    public function getSetting($key)
    {
        return Cache::remember('setting_'.$key, 60, function () use ($key) {
            return Setting::where('key', $key)->first()->value ?? null;
        });
    }

    public function setSetting($key, $value)
    {
        Cache::forget('setting_'.$key);
        return Setting::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
