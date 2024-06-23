<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProductRequest;
use App\Http\Resources\V1\Product\ProductShowResource;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductExtraDetail;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Validation\UnauthorizedException;


class ProductController extends Controller
{
    
    public function index()
    {
        //
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        if(Auth::check() && Auth::user()->isAdmin || Auth::user()->isManager)
        {
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

            // Save products extra detail
            if(isset($data['extra_details'])) {
                $details = $data['extra_details'];
                $detailData = [];
                foreach( $details as $detail){
                    $detailData[] = [
                        'product_id' => $product->id,
                        'name' => $detail['name'],
                        'value' => $detail['value'],
                    ];
                }
                ProductExtraDetail::insert($detailData);
            }


            return ProductShowResource::make($product);
        }

        throw new UnauthorizedException(__("unauthenticated_access"));
    }

    public function show(string $id)
    {
        //
    }

    
    public function update(ProductRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
