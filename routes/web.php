<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlugController;
use App\Http\Controllers\AdminController;

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
Route::prefix('shin')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
});

Route::prefix('admins')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name(config('shin.route.INDEX_ADMIN'));
});

Route::prefix('images')->group(function () {
    Route::get('/', [SlugController::class, 'index'])->name(config('shin.route.INDEX_IMG'));
    Route::get('create', [SlugController::class, 'create'])->name(config('shin.route.CREATE_IMG'));
    Route::post('store',[SlugController::class,'store'])->name(config('shin.route.STORE_IMG'));
});

