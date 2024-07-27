<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProductVariationStorRequest;
use App\Http\Resources\V1\Product\ProductVariationResource;
use App\Http\Resources\V1\Product\VariationResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;


use App\Models\Product;
use App\Models\Variation;
use App\Models\ProductStock;

class ProductVariationController extends Controller
{
    public function index()
    {
        $variations = Variation::query()->with('variationOptions')->select('id', 'slug', 'name')->get();

        return VariationResource::collection($variations);
    }


    public function store(ProductVariationStorRequest $request)
    {
        $data = $request->validated();

        foreach ($data['variants'] as $index => $variation) {
            $productStockData = [
                'product_id' => $data['product_id'],
                'varient' => $variation['name'],
                'price' => $variation['price'],
                'sku' => $variation['sku'], 
                'qty' => $variation['stock'],
            ];

           // save image
            if ($request->hasFile("variants.$index.image")) {
                $productStockData['image'] = '/storage/' . $request->file("variants.$index.image")->store('uploads', 'public');
            }
            ProductStock::create($productStockData);
        }

        return Response::HTTP_OK;
    }

    public function show(string $slug)
    {
        $product = Product::query()
        ->where('slug', $slug)
        ->select('id','title', 'cover_image')
        ->with('stocks', 'stocks.product')
        ->first();

        return VariationResource::make($product);
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        $variation = ProductStock::find($id);

        if($variation){
            $image = $variation->image;
            if($image){
                $imagePath = str_replace('/storage','public',$image);
                Storage::delete($imagePath);
            }
            $variation->delete();
            return Response::HTTP_OK;
        }
    }
}