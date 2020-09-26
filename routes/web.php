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
    Route::delete('procatdeleteAll',"\App\Http\Controllers\admin\AdminProCatController@deleteAll")->name('proCat.deleteAll');
    Route::delete('proCatSelectedDelete',"\App\Http\Controllers\admin\AdminProCatController@selectedDelete")->name('proCat.deleteSelected');
});


//Route::get('/procat/{id}', function ($id) {
//    $proCat=\App\Models\ProCat::find($id);
//    return $proCat->category;
//});


Route::get('/procatt/{id}', function ($id) {
    $proCat=\App\Models\ProCat::find($id);
    return $proCat->childrenRecursive;
});


//laravel ui
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
});
//laravel ui

//make change in routes
