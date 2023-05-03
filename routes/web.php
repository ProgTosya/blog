<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'aa';
});
Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class);
});


Route::group(['namespace' => 'Admin','prefix' => 'admin'], function() {

    Route::group(['namespace' => 'Admin\Main'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, '__invoke']);
    });
});

Auth::routes();
