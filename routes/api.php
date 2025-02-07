<?php

use App\Http\Controllers\AdminBrandApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function(){
    return "hello world";
});

Route::get('/admin/brand', [AdminBrandApiController::class, 'index']);
Route::get('/admin/brand/{id}', [AdminBrandApiController::class, 'show']);
Route::post('/admin/brand', [AdminBrandApiController::class, 'create']);
Route::put('/admin/brand/{id}', [AdminBrandApiController::class, 'update']);
Route::delete('/admin/brand/{id}', [AdminBrandApiController::class, 'delete']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
