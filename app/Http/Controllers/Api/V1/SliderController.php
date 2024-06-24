<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SliderResource;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::query()
        ->sortBy()
        ->paginate();
        return SliderResource::collection($sliders);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'slider' => 'required|mimes:png,jpg,jpeg,webp|between:300, 900',
            'url' => 'required|string',
        ]);
        $slider = Slider::create($data);
        return SliderResource::make($slider);
    }

    
    public function update(Request $request, string $id)
    {
        $slider = Slider::findOrFail($id);
        $data = $request->validate([
            'slider' => 'nullable|mimes:png,jpg,jpeg,webp|between:300, 900',
            'url' => 'required|string',
        ]);
        if($request->hasFile('image')){
            if ($slider->image) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $slider->image));
            }
            $path = '/storage/' . $request->file('image')->store('uploads', 'public');
            $data['image'] = $path;
        }
        $slider = $slider->upddate($data);

        return SliderResource::make($slider);
    }
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        if($slider){
            $image = $slider->image;
            if($image){
                $imagePath = str_replace('/storage', 'public', $image);
                Storage::delete($imagePath);
            }
            $slider->delete();
            return Response::HTTP_OK;
        }
    }
}
