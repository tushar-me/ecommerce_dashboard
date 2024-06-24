<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ManagerRequest;
use App\Http\Resources\V1\Manager\ManagerShowResource;
use App\Http\Resources\V1\Manager\ManagerListResource;
use Illuminate\Http\Request;
use App\Models\MAnager;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::query()
        ->whereLike(['name', 'phone', 'email'], request()->input('search'))
        ->sortBy()
        ->pagination(); 

        return ManagerListResource::collection($managers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerRequest $request): ManagerShowResource
    {
        $data = $request->validated();
        $manager = Manager::create($data);
        return ManagerShowResource::make($manager);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manager = Manager::findOrFail($id);
        return ManagerShowResource::make($manager);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ManagerRequest $request, string $id)
    {
        $manager = Manager::findOrFail($id);
        $data = $request->validated();
        return ManagerShowResource::make($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manager = Manager::findOrFail($id);
        if($manager)
            {
                $image = $manager->image;
                if($image){
                    $imagePath = str_replace('/storage','public',$image);
                    Storage::delete($imagePath);
                }

                $cover_image = $manager->cover_image;
                if($cover_image) {
                    $imagePath = str_replace('/storage','public',$image);
                    Storage::delete($imagePath);
                }
                $manager->delete();

                return Response::HTTP_OK;
            }
    }
}