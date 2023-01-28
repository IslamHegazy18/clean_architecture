<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('posts')->as('posts:')->group(function(){
    Route::get('/',App\Http\Controllers\Api\V1\Posts\IndexController::class)->name('index');
    Route::post('/',App\Http\Controllers\Api\V1\Posts\StoreController::class)->name('store');
    Route::get('{post:key}',App\Http\Controllers\Api\V1\Posts\ShowController::class)->name('show');
    Route::patch('{post:key}',App\Http\Controllers\Api\V1\Posts\UpdateController::class)->name('update');
    Route::delete('{post:key}',App\Http\Controllers\Api\V1\Posts\DeleteController::class)->name('delete');

});
