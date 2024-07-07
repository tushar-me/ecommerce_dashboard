<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\CategoryRequest;
use App\Http\Resources\V1\Category\CategoryListResource;
use App\Http\Resources\V1\Category\CategoryParentResource;
use App\Http\Resources\V1\Category\CategoryShowResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use function App\Http\Helpers\uploadFile;


class CategoryController extends Controller
{

    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $categories = Category::query()
        ->whereLike(['name'], $request->input('search'))
        ->sortBy()
        ->pagination(); 

        return CategoryListResource::collection($categories);
    }

    public function getParent()
    {
        $categories = Category::query()
        ->where('parent_id', 0)
        ->get();

        return CategoryParentResource::collection($categories);
    }

    public function getAllCategoryList()
    {
        $categories = Category::query()
        ->select('id', 'name')
        ->get();

        return CategoryListResource::collection($categories);
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = str::slug($data['name']);

        if($request->hasFile('icon')){
            $path ='/storage/'.$request->file('icon')->store('uploads','public');
            $data['icon'] = $path;
        }
        if($request->hasFile('banner')){
            $path ='/storage/'.$request->file('banner')->store('uploads','public');
            $data['banner'] = $path;
        }

        $category = Category::create($data);

        return CategoryShowResource::make($category);
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return CategoryShowResource::make($category);
    }

    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();
        // save icon image
        if($request->hasFile('icon')){
            if ($category->icon) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $category->icon));
            }
            $path = '/storage/' . $request->file('icon')->store('uploads', 'public');
            $data['icon'] = $path;
        }

        // save banner image
        if($request->hasFile('banner')){
            if ($category->banner) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $category->banner));
            }
            $path = '/storage/' . $request->file('banner')->store('uploads', 'public');
            $data['banner'] = $path;
        }
        $category = $category->upddate($data);

        return CategoryShowResource::make($category);
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if($category)
        {
            $image = $category->image;
            if($image){
                $imagePath = str_replace('/storage','public',$image);
                Storage::delete($imagePath);
            }
            $category->delete();

            return Response::HTTP_OK;
        }
    }
}