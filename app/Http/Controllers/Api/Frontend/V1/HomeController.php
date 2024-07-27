<?php

namespace App\Http\Controllers\Api\Frontend\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SliderResource;
use App\Http\Resources\V1\Category\CategoryListResource;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;

class HomeController extends Controller
{
    public function getHeaderCategory()
    {
        $categories = Category::query()
        ->where('status', 1)
        ->where('parent_id', 0)
        ->with('children')
        ->get();

        return CategoryListResource::collection($categories);
    }

    public function getFeatuerdProducts()
    {

    }

    public function getHomePageCategory()
    {
        $categories = Category::query()
        ->where('status', 1)
        ->where('parent_id', 0)
        ->with('children')
        ->get();

        return CategoryListResource::collection($categories);
    }

    public function getHeroSlider()
    {
        $sliders = Slider::query()
        ->where('status', 1)
        ->orderBy('order_number')
        ->get();

        return SliderResource::collection($sliders);
    }
}