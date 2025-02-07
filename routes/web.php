<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\logoutController;
use App\Http\Middleware\RoleAdmin;
use Illuminate\Support\Facades\Auth;

Route::get('/basket',[BasketController::class, 'basket'])->name('basket');
Route::get('/basket/history',[BasketController::class, 'history'])->name('basket.history');
Route::get('/basket/add/{product_id}/{brand_id}',[BasketController::class, 'addToBasket'])->name('basket.add');
Route::get('/basket/remove/{product_id}',[BasketController::class, 'removeFromBasket'])->name('basket.remove');
Route::get('/basket/delete/{product_id}',[BasketController::class, 'delete'])->name('basket.del');
Route::get('/checkout/{user_id}',[BasketController::class, 'checkout'])->name('checkout');

Route::get('/',[HomeController::class, 'Home'])->name('home');
Route::get('/brands/{id}',[HomeController::class, 'brand'])->name('brands');
Route::get('/categories/{id}',[HomeController::class, 'category'])->name('categs');
Route::get('/search',[HomeController::class, 'search'])->name('search');

Route::get('/default',[HomeController::class, 'def'])->name('def');
Route::get('/admin',[AdminController::class, 'admin'])->middleware(RoleAdmin::class);
Route::get('/admin/brands/list',[AdminController::class, 'brands'])->name('brandList');
Route::get('/admin/products/list',[AdminController::class, 'prods'])->name('prodList');
Route::get('/admin/categories/list',[AdminController::class, 'cats'])->name('catList');

Route::get('/admin/brands/create',[AdminController::class, 'brandCr'])->name('brandCr');
Route::get('/admin/products/create',[AdminController::class, 'prodCr'])->name('prodCr');
Route::get('/admin/categories/create',[AdminController::class, 'catCr'])->name('catCr');

Route::post('/admin/brands/create/post', [AdminController::class, 'brandPost'])->name('brand-post');
Route::post('/admin/products/create/post', [AdminController::class, 'prodPost'])->name('prod-post');
Route::post('/admin/categories/create/post', [AdminController::class, 'catPost'])->name('cat-post');

Route::get('/admin/brands/update/{id}',[AdminController::class, 'brandUp'])->name('brandEd');
Route::get('/admin/products/update/{id}',[AdminController::class, 'prodUp'])->name('prodEd');
Route::get('/admin/categories/update/{id}',[AdminController::class, 'catUp'])->name('catEd');

Route::post('/admin/brands/update/post', [AdminController::class, 'brandEdPost'])->name('brand-ed');
Route::post('/admin/products/update/post', [AdminController::class, 'prodEdPost'])->name('prod-ed');
Route::post('/admin/categories/update/post', [AdminController::class, 'catEdPost'])->name('cat-ed');

Route::get('/admin/brands/delete/{id}',[AdminController::class, 'brandDel'])->name('brandDel');
Route::get('/admin/products/delete/{id}',[AdminController::class, 'prodDel'])->name('prodDel');
Route::get('/admin/categories/delete/{id}',[AdminController::class, 'catDel'])->name('catDel');

Route::get('/logout',[logoutController::class, 'logout'])->name('logout');

Auth::routes();

