<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [IndexController::class, 'index']);
Route::get('/index/ShopNameSearch', [IndexController::class, 'ShopNameSearch']);
Route::get('/index/AreaSearch', [IndexController::class, 'AreaSearch']);
Route::get('/index/KindSearch', [IndexController::class, 'KindSearch']);
Route::get('/detail/shop_id', [IndexController::class, 'detail']);
Route::post('/detail/shop_id/reserve', [IndexController::class, 'reserve']);
Route::post('/favorite', [IndexController::class, 'favorite']);
Route::post('/mypage', [IndexController::class, 'mypage']);
Route::delete('/favorite/delete', [IndexController::class, 'delete']);
