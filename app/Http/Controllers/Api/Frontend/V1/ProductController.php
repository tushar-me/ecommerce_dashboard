<?php

namespace App\Http\Controllers\Api\Frontend\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Category\CategoryShowResource;
use App\Http\Resources\V1\Product\ProductListResource;
use App\Http\Resources\V1\Product\ProductShowResource;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        
        $products = Product::query()
        ->with('category','brand')
        ->where('title', 'like', '%' . $request->input('search') . '%')
        ->paginate();
        return ProductListResource::collection($products);
    }


    public function getSearchProduct(Request $request)
    {
        $products = Product::query()
        ->with('category','brand')
        ->where('title', 'like', '%' . $request->input('search') . '%')
        ->take(20)
        ->get();
        return ProductListResource::collection($products);
    }   
    public function getCategoryProduct($slug)
    {
        $category = Category::query()->where('slug', $slug)->with('products', 'children')->first();

        return CategoryShowResource::make($category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $product = Product::query()->where('slug', $slug)->with('images', 'category', 'brand', 'stocks')->first();

        return ProductShowResource::make($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
