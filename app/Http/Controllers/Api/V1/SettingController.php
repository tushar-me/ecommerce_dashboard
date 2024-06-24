<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Setting;

class SettingController extends Controller
{
    public function saveSettings()
    {
        foreach (Request::all() as $type => $value ){
            $business_settings = Setting::where('type', $type)->first();

            if ($type == 'header_logo' && Request::hasFile('header_logo')){
                $value = Request::file('header_logo')->store('settings', 'public');
            }

            if ($type == 'footer_logo' && Request::hasFile('footer_logo')) {
                $value = Request::file('footer_logo')->store('settings', 'public');
            }

            if ($type == 'fav_icon' && Request::hasFile('fav_icon')) {
                $value = Request::file('fav_icon')->store('settings', 'public');
            }

            if($business_settings != null) {
                if ($value != null){
                    if ($type == 'timezone' && gettype($value) != 'array'){
                        $value = $business_settings->value;
                    }
                    if(gettype($value) == 'array'){
                        $business_settings->value = json_encode($value);
                    }
                    else {
                        $business_settings->value = $value;
                    }
                    $business_settings->save();
                }
            } else{
                if ($value != null){
                    $business_settings = new Setting;
                    $business_settings->type = $type;
                    if(gettype($value) == 'array'){
                        $business_settings->value = json_encode($value);
                    }
                    else {
                        $business_settings->value = $value;
                    }
                    $business_settings->save();
                }
            }
        }
    }

    public function logoUpdate(){
        if (Request::hasFile('header_logo')){
            $business_settings = Setting::where('type', 'header_logo')->first();
            if ($business_settings?->value != null){
                Storage::disk('public')->delete($business_settings->value);
            }
            $value = Request::file('header_logo')->store('uploads', 'public');
            $business_settings->value = '/storage/' . $value;
            $business_settings->save();
        }
        if (Request::hasFile('footer_logo')){
            $business_settings = Setting::where('type', 'footer_logo')->first();
            if ($business_settings?->value != null){
                Storage::disk('public')->delete($business_settings->value);
            }
            $value = Request::file('footer_logo')->store('uploads', 'public');
            $business_settings->value ='/storage/' . $value;
            $business_settings->save();
        }

        if (Request::hasFile('fav_icon')){
            $business_settings = Setting::where('type', 'fav_icon')->first();
            if ($business_settings?->value != null){
                Storage::disk('public')->delete($business_settings->value);
            }
            $value = Request::file('fav_icon')->store('uploads', 'public');
            $business_settings->value ='/storage/' . $value;
            $business_settings->save();
        }
        return redirect()->route('setting.index');
    }
}