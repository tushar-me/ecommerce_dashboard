<?php
namespace App\Http\Helpers;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Laravel\Facades\Image;
// use Intervention\Image\ImageManager;



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



if(!function_exists('uploadFile')) {
    function uploadFile($image, $path, $productSlug, $width = null, $height = null) {
        try{
            if(!Storage::exists($path)) {
                Storage::makeDirectory($path);
            }

            $imageName = $productSlug . "_" . uniqid() . '.webp';
            $img = Image::make($image->getRealPath());

            if($width && $height) {
                $img->resize($width, $height, function($constraint) {
                    $constraint->aspectRation();
                });
            }
            $img->save(storage_path('storage/' . $path . '/' . $imageName), 90, 'webp');

            return $path . '/' . $imageName;
            
        }catch (\Exception $e) {
            return false;
        }
    }
}