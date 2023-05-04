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
    Route::group(['namespace' => 'Admin\Category', 'prefix' => 'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.category.store');
        Route::get('/{category}', [\App\Http\Controllers\Admin\Category\ShowController::class, '__invoke'])->name('admin.category.show');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('admin.category.edit');
        Route::patch('/{category}', [\App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('admin.category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\Category\DestroyController::class, '__invoke'])->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Admin\Tag', 'prefix' => 'tags'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Tag\IndexController::class, '__invoke'])->name('admin.tag.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Tag\CreateController::class, '__invoke'])->name('admin.tag.create');
        Route::post('/', [\App\Http\Controllers\Admin\Tag\StoreController::class, '__invoke'])->name('admin.tag.store');
        Route::get('/{tag}', [\App\Http\Controllers\Admin\Tag\ShowController::class, '__invoke'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [\App\Http\Controllers\Admin\Tag\EditController::class, '__invoke'])->name('admin.tag.edit');
        Route::patch('/{tag}', [\App\Http\Controllers\Admin\Tag\UpdateController::class, '__invoke'])->name('admin.tag.update');
        Route::delete('/{tag}', [\App\Http\Controllers\Admin\Tag\DestroyController::class, '__invoke'])->name('admin.tag.delete');
    });
    Route::group(['namespace' => 'Admin\Post', 'prefix' => 'posts'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Post\IndexController::class, '__invoke'])->name('admin.post.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Post\CreateController::class, '__invoke'])->name('admin.post.create');
        Route::post('/', [\App\Http\Controllers\Admin\Post\StoreController::class, '__invoke'])->name('admin.post.store');
        Route::get('/{post}', [\App\Http\Controllers\Admin\Post\ShowController::class, '__invoke'])->name('admin.post.show');
        Route::get('/{post}/edit', [\App\Http\Controllers\Admin\Post\EditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/{post}', [\App\Http\Controllers\Admin\Post\UpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/{post}', [\App\Http\Controllers\Admin\Post\DestroyController::class, '__invoke'])->name('admin.post.delete');
    });
});


Auth::routes();
