<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\SliderRequest;
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
        ->orderBy('order_number')
        ->paginate();
        return SliderResource::collection($sliders);
    }

    public function show($id)
    {
        $slider = Slider::find($id);

        return SliderResource::make($slider);
    }
    public function store(SliderRequest $request)
    {
        $data = $request->validated();
        if($data['status'] === 'true' || $data['status'] === '1'){
            $data['status'] = 1;
        }else {
            $data['status'] = 0;
        }
        if($request->hasFile('image')){
            $path ='/storage/'.$request->file('image')->store('uploads','public');
            $data['image'] = $path;
        }

        $slider = Slider::create($data);
        return SliderResource::make($slider);
    }


    public function updateStatus($id)
    {
        $slider = Slider::find($id);

        if($slider->status === 1){
            $slider->update([
                'status' => 0
            ]);
        }else {
            $slider->update([
                'status' => 1
            ]);
        }

        return SliderResource::make($slider);
    }
    
    public function update(Request $request, string $id)
    {
        $slider = Slider::findOrFail($id);
        
        $data = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'url' => 'required|string',
            'order_number' => 'required|integer',
            'status' => 'required'
        ]);

        if($data['status'] === 'true' || $data['status'] === '1'){
            $data['status'] = 1;
        }else {
            $data['status'] = 0;
        }

        if($request->hasFile('image')){
            if ($slider->image) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $slider->image));
            }
            $path = '/storage/' . $request->file('image')->store('uploads', 'public');
            $data['image'] = $path;
        }
        $slider->update($data);

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
