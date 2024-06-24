<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AdvertiseResource;
use Illuminate\Http\Request;
use App\Models\Advertise;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class AdvertiseController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg,webp|between:300, 900',
            'products' => 'required',
        ]);

        $advertise = Advertise::create($data);
        return  AdvertiseResource::make($advertise);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertise = Advertise::findOrFail($id);
        if($advertise){
            $image = $advertise->image;
            if($image){
                $imagePath = str_replace('/storage', 'public', $image);
                Storage::delete($imagePath);
            }
            $advertise->delete();

            return Response::HTTP_OK;
        }
    }
}