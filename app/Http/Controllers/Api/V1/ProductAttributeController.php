<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Product\ProductAttributeResource;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ProductAttributeController extends Controller
{
    public function index(Request $request) :\Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $attributes = ProductAttribute::query()
        ->whereLike(['name', 'slug'], $request->input('search')) 
        ->paginate(20);

        return ProductAttributeResource::collection($attributes);
    }

    public function store(Request $request) :ProductAttributeResource
    {
        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'nullable|string'
        ]);
        $data['slug'] = Str::slug($data['name']);
        $productAttribute = ProductAttribute::create($data);

        return ProductAttributeResource::make($productAttribute);
    }


    public function update(Request $request, string $id)
    {
        $productAttribute = ProductAttribute::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'nullable|string'
        ]);
        $data['slug'] = Str::slug($data['name']);
        $productAttribute = $productAttribute->update($data);

        return ProductAttributeResource::make($productAttribute);
    }

    public function destroy(string $id)
    {
        $productAttribute = ProductAttribute::findOrFail($id);

        if($productAttribute){
            $productAttribute->delete();

            return Response::HTTP_OK;
        }
    }
}