<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);
Route::middleware('auth')->group(function () {
     Route::get('/', [AuthController::class, 'index']);
});