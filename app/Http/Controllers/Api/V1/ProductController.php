<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProductRequest;
use App\Http\Resources\V1\Product\ProductShowResource;
use App\Http\Resources\V1\Product\ProductListResource;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductExtraDetail;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{
    
    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
        ->with('user', 'category', 'images', 'brand')
        ->whereLike(['title'], request()->input('search'))
        ->sortBy()
        ->pagination();
        return ProductListResource::collection($products);
    }

    public function store(ProductRequest $request): ProductShowResource
    {
        $data = $request->validated();
        
        // save cover image
        if($request->hasFile('cover_image')){
            $path = '/storage/' . $request->file('cover_image')->store('uploads', 'public');
            $data['cover_image'] = $path;
        }

        // save product hover image
        if($request->hasFile('hover_image')){
            $path = '/storage/' . $request->file('hover_image')->store('uploads', 'public');
            $data['hover_image'] = $path;
        }

        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($data['title']);
        
        $product = Product::create($data);

        // save product images 
        if ($request->hasFile('images')) {
            $imageData = [];
            $images = $request->file('images');
    
            foreach( $images as $image){
                $imageData[] = [
                    'url' => '/storage/'.$image['file']->store('uploads', 'public'),
                    'product_id' => $product->id
                ];
            }

            if (!empty($imageData)) {
                ProductImage::insert($imageData);
            }
        }

        return ProductShowResource::make($product);
    }

    public function show(string $id): ProductShowResource
    {
        $product = Product::findOrFail($id);
        return ProductShowResource::make($product);
    }

    
    public function update(ProductRequest $request, string $id)
    {
        //
    }

    public function deleteImage(string $id)
    {
        $image = ProductImage::findOrFail($id);
        if($image)
        {
            $imagePath = str_replace('/storage', 'public', $image->url);
            Storage::delete($imagePath);
            $image->delete();
        }
    }
    public function destroy(string $id)
    {
        if(Auth::check() && Auth::user()->role === 'admin')
        {
            $product = Product::findOrFail($id);
            if ($product) {
                $images = $product->images;
                foreach ($images as $image) {
                    $imagePath = str_replace('/storage', 'public', $image->url);
                    Storage::delete($imagePath);
                    $image->delete();
                }
                $product->delete();
                return Response::HTTP_OK;
            }
        }
        throw new UnauthorizedException(__("unauthenticated_access"));
    }
}