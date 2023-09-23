<?php

use App\Http\Controllers\AdminContoller;
use App\Models\Item;
use App\Models\Horse;
use App\Models\Animal;
use App\Models\oodTest;
use App\Models\Category;
use App\Models\TestAnswer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

use App\Http\Controllers\AdminLoginController;



Route::get('/',function(){
    // dd('hi');
});
Route::get('/check-out',[ShopController::class,'checkout']);
Route::prefix('admin')->group(function(){

  Route::view('/','layouts.master');

//   Route::resource('/login-ad', AdminContoller::class);

  Route::get('category/index',[CategoryController::class,'index']);
  Route::post('category',[CategoryController::class,'store']);
  Route::get('category/create',[CategoryController::class,'create']);
  Route::get('category/{id}/edit',[CategoryController::class,'edit']);
  Route::get('category/{id}',[CategoryController::class,'show']);
  Route::resource('sub_category',SubCategoryController::class);
  Route::resource('brand',BrandController::class);
  Route::resource('company',CompanyController::class);
  Route::resource('item',ItemController::class);

});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/login-ad',AdminContoller::class);
