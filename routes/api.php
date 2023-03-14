<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes create by https://github.com/yogi-maulana-dev
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'],function () {
    // Route::post('/register',[AuthController::class, 'create']);
    Route::get('/logout',[AuthController::class, 'logout']);
// dibawah ini untuk profil kalau mau nanya di https://github.com/yogi-maulana-dev
    // Route::get('/edit/{id}',[register::class, 'edit']);
    // Route::post('/update/{id}',[register::class, 'update']);
    // Route::get('/delete/{id}',[register::class, 'delete']);
});


//kode 001 dibawah ini untuk profil kalau mau nanya di https://github.com/yogi-maulana-dev
Route::post('login',[AuthController::class, 'login']);




