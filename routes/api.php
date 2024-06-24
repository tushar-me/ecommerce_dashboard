<?php

use App\Http\Controllers\Api\V1\AdvertiseController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\BrandController;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\ManagerController;
use App\Http\Controllers\Api\V1\SliderController;
use App\Http\Controllers\Auth\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\Manager\LoginController as ManagerLoginController;
use App\Http\Controllers\Auth\Customer\LoginController as CustomerLoginController;
use App\Http\Controllers\Auth\Customer\RegisterController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::prefix('auth')->group(function () {
    // Route::post('/login', [LoginController::class, 'login']);
    // Route::post('/register', [RegisterController::class, 'register']);
    // Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');
});


    Route::post('/manager/login', [ManagerLoginController::class, 'login']);
    Route::post('/admin/login', [AdminLoginController::class, 'login']);
    Route::post('/customer/login', [CustomerLoginController::class, 'login']);
    Route::post('/customer/register', [RegisterController::class, 'register']);




Route::get('/get-admin-data', function() {return 'Admin Panel Hacked';})->middleware(['auth:sanctum', 'type.admin']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->middleware(['auth:sanctum', 'throttle:api'])->group( function () { 

    Route::get('/delete-product-image', [ProductController::class, 'deleteImage']);
    Route::apiResources([
        'category' => CategoryController::class,
        'brand' => BrandController::class,
        'product' => ProductController::class,
        'customer' => CustomerController::class,
        'manager' => ManagerController::class,
        'slider' => SliderController::class,
        'advertise' => AdvertiseController::class,
    ]);
});
