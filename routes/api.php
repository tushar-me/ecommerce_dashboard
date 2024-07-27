<?php
// Frontend Route

use App\Http\Controllers\Api\Frontend\V1\HomeController;
use App\Http\Controllers\Api\Frontend\V1\ProductController as FrontendProductController;
use App\Http\Controllers\Api\V1\AddressController;
use App\Http\Controllers\Api\V1\AdvertiseController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\BrandController;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\ManagerController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\PageController;
use App\Http\Controllers\Api\V1\ProductAttributeController;
use App\Http\Controllers\Api\V1\ProductVariationController;
use App\Http\Controllers\Api\V1\ShippingAreaController;
use App\Http\Controllers\Api\V1\SliderController;
use App\Http\Controllers\Api\V1\VariationController;
use App\Http\Controllers\Auth\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\Manager\LoginController as ManagerLoginController;
use App\Http\Controllers\Auth\Customer\LoginController as CustomerLoginController;
use App\Http\Controllers\Auth\Customer\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



// Frontend Route
Route::post('/customer/login', [CustomerLoginController::class, 'login']);
Route::post('/customer/register', [RegisterController::class, 'register']);

Route::prefix('frontend/v1')->middleware('throttle:api')->group( function() {
    Route::get('/category-product/{slug}', [FrontendProductController::class, 'getCategoryProduct']);

    Route::get('/get-search-product', [FrontendProductController::class, 'getSearchProduct']);
    Route::apiResource('product', FrontendProductController::class);

    Route::get('/get-header-category', [HomeController::class, 'getHeaderCategory']);
    Route::get('/get-home-page-category', [HomeController::class, 'getHomePageCategory']);
    Route::get('/get-hero-slider', [HomeController::class, 'getHeroSlider']);

    Route::post('/save-customer-address', [AddressController::class, 'store'])->middleware('auth:sanctum');

    Route::apiResource('address', AddressController::class);

    Route::post('/save-order', [OrderController::class, 'store']);
    Route::get('/get-customer-order', [OrderController::class, 'customerOrder']);
    Route::get('/order-detail/{id}', [OrderController::class, 'showCustomerOrder']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Dashboard Route
Route::post('/manager/login', [ManagerLoginController::class, 'login']);
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::prefix('v1')->middleware(['auth:sanctum', 'throttle:api', 'type.admin'])->group( function () { 

    Route::get('/delete-product-image', [ProductController::class, 'deleteImage']);


    // Category Route
    Route::get('/parent-category', [CategoryController::class, 'getParent']);
    Route::get('/get-all-category-list', [CategoryController::class, 'getAllCategoryList']);
    // Route::apiResource('category', CategoryController::class);

    //Brand Rote
    Route::get('/get-all-brand-list', [BrandController::class, 'getAllBrandList']);
    Route::apiResource('brand', BrandController::class);

    //product variation route
    Route::apiResource('/product-variation', ProductVariationController::class);
    Route::apiResource('variation', VariationController::class);

    //update Slider Status
    Route::post('/update-slider-status/{id}', [SliderController::class, 'updateStatus']);
    Route::post('/update-area-status/{id}', [ShippingAreaController::class, 'updateStatus']);

    Route::apiResources([
        'product' => ProductController::class,
        'customer' => CustomerController::class,
        'manager' => ManagerController::class,
        'slider' => SliderController::class,
        'category' => CategoryController::class,
        'advertise' => AdvertiseController::class,
        'order' => OrderController::class,
        'page' => PageController::class,
        'shipping-area' => ShippingAreaController::class,
    ]);
});


Route::post('/get-data', fn () => 'Data____!!');