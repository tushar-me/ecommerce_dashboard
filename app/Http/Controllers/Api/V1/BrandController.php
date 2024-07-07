<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Resources\V1\Brand\BrandListResource;
use App\Http\Resources\V1\Brand\BrandShowResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::query()
        ->whereLike(['name'], request()->input('search'))
        ->sortBy()
        ->pagination(); 
        
        return BrandListResource::collection($brands);
    }

    
    public function getAllBrandList()
    {
        $brands = Brand::query()
        ->select('id', 'slug', 'name')
        ->get();

        return BrandListResource::collection($brands);
    }

    public function store(BrandRequest $request)
    {
        $data = $request->validated();
        // save icon image
        if($request->hasFile('logo')){
            $path = '/storage/' . $request->file('logo')->store('uploads', 'public');
            $data['logo'] = $path;
        }

        // save banner image
        if($request->hasFile('banner')){
            $path = '/storage/' . $request->file('banner')->store('uploads', 'public');
            $data['banner'] = $path;
        }
        $brand = Brand::create($data);

        return BrandShowResource::make($brand);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        return BrandShowResource::collection($brand);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, string $id): BrandShowResource
    {
        $brand = Brand::findOrFail($id);
        $data = $request->validated();
        // save logo image
        if($request->hasFile('logo')){
            if ($brand->logo) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $brand->logo));
            }
            $path = '/storage/' . $request->file('log')->store('uploads', 'public');
            $data['logo'] = $path;
        }

        // save banner image
        if($request->hasFile('banner')){
            if ($brand->banner) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $brand->banner));
            }
            $path = '/storage/' . $request->file('banner')->store('uploads', 'public');
            $data['banner'] = $path;
        }
        $brand = $brand->update($data);

        return BrandShowResource::make($brand);
    }

    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        if($brand)
        {
            $image = $brand->image;
            if($image){
                $imagePath = str_replace('/storage','public',$image);
                Storage::delete($imagePath);
            }
            $brand->delete();

            return Response::HTTP_OK;
        }
    }
}
