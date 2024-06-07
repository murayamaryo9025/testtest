<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopdetailController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ShopallController;
use App\Http\Controllers\ReservationC;

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

Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
});
Route::post('/mypage',[MypageController::class, 'index']);
Route::post('/thanks',[thanksController::class, 'index']);
Route::post('/detail/:shop_id',[ShopdetailController::class,'index']);
Route::post('/shopall',[ShopallController::class, 'index']);
Route::post('/done',[ReservationC::class, 'index']);