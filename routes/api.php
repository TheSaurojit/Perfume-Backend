<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/products', fn () => 
    Product::with(['singleImage', 'multipleImages'])->where('status','published')->latest()->get()
);

Route::get('/product/{productId}', function (string $productId) {

     $product = Product::with(['singleImage', 'multipleImages'])
        ->where('id', $productId)
        ->where('status', 'published')
        ->first();

    return $product ?? (object)[];
});


Route::post('/contact-us',[ContactUsController::class,'store']) ;

Route::post('/create-order',[OrderController::class,'createOrder']) ;

Route::get('/bank-details',fn () => Setting::find(1) ?? (object)[]  ) ;

