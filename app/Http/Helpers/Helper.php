<?php

namespace App\Http\Helpers;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


if (!function_exists('getSetting')) {
    function getSetting($key, $default = null)
    {
        $setting = Setting::where('type', $key)->first();
        return $setting == null ? $default : $setting->value;
    }

    if (!function_exists('overWriteEnv')){
        function overWriteEnv($key, $value){
            $envFile = base_path('.env');

            if (File::exists($envFile)) {
                $contents = File::get($envFile);
                $updatedContents = Str::replaceFirst(
                    "{$key}=" . env($key),
                    "{$key}='" . $value . "'",
                    $contents
                );
                File::put($envFile, $updatedContents);
                return "Environment variable updated successfully!";
            }
        }
    }
}