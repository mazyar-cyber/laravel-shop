<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\admin\AdminUserController;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('users', AdminUserController::class);
    Route::resource('procat', \App\Http\Controllers\admin\AdminProCatController::class);
    Route::resource('productProperty', \App\Http\Controllers\admin\AdminProductPropertyController::class);
    Route::resource('ProductPropertyValue', \App\Http\Controllers\admin\AdminProductPropertyValue::class);
    Route::resource('brand', \App\Http\Controllers\admin\AdminBrandController::class);
    Route::post('brandSelectedDelete', '\App\Http\Controllers\admin\AdminBrandController@selectedDestroy')->name('brand.selectedDel');
    Route::post('branduploader', "\App\Http\Controllers\admin\AdminBrandController@Uploader")->name('brand.upload');
    Route::post('productPropertySelectedDelete', "\App\Http\Controllers\admin\AdminProductPropertyController@deleteAll")->name('property.deleteAll');
    Route::delete('procatdeleteAll', "\App\Http\Controllers\admin\AdminProCatController@deleteAll")->name('proCat.deleteAll');
    Route::post('proCatSelectedDelete', "\App\Http\Controllers\admin\AdminProCatController@selectedDelete")->name('proCat.deleteSelected');
});

//trying relation between models
//Route::get('/prop/{id}', function ($id) {
////    $property=\App\Models\ProductProperty::find($id);
//    $propValue = \App\Models\PropertyValue::find($id);
//    return $propValue->property;
////    return $property->value;
//});


//laravel ui
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
});
//laravel ui

//make change in routes
