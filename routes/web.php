<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SpecieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailAnimalController;

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
    Route::get('/', [HomeController::class, 'index'])->name(config('shin.route.HOME'));
});

Route::prefix('admins')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name(config('shin.route.ADMIN'));

});

Route::prefix('species')->group(function () {
    Route::get('/', [SpecieController::class, 'index'])->name(config('shin.route.SPECIE'));
    Route::get('create', [SpecieController::class, 'create'])->name(config('shin.route.CREATE_SPECIE'));
    Route::post('store', [SpecieController::class, 'store'])->name(config('shin.route.STORE_SPECIE'));
    Route::post('edit/{id}', [SpecieController::class, 'edit'])->name(config('shin.route.EDIT_SPECIE'));
    Route::put('update/{id}', [SpecieController::class, 'update'])->name('shin.route.UPDATE_SPECIE');
    Route::get('show/{id}', [SpecieController::class, 'show'])->name(config('shin.route.SHOW_SPECIE'));
//    Route::delete('destroy/{id}' ,[SpecieController::class, 'destroy'])->name(config('shin.route.DESTROY_SPECIE'));
});

Route::prefix('animals')->group(function () {
    Route::get('/', [AnimalController::class, 'index'])->name(config('shin.route.ANIMAL'));
    Route::get('create', [AnimalController::class, 'create'])->name(config('shin.route.CREATE_ANIMAL'));
    Route::post('store', [AnimalController::class, 'store'])->name(config('shin.route.STORE_ANIMAL'));
    Route::get('edit/{id}', [AnimalController::class, 'edit'])->name(config('shin.route.EDIT_ANIMAL'));
    Route::put('update/{id}', [AnimalController::class, 'update'])->name('shin.route.UPDATE_ANIMAL');
    Route::get('show/{id}', [AnimalController::class, 'show'])->name(config('shin.route.SHOW_ANIMAL'));
//    Route::delete('destroy' ,[AnimalController::class, 'destroy'])->name(config('shin.route.DESTROY_ANIMAL'));
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name(config('shin.route.PRODUCT'));
    Route::get('create', [ProductController::class, 'create'])->name(config('shin.route.CREATE_PRODUCT'));
    Route::post('store', [ProductController::class, 'store'])->name(config('shin.route.STORE_PRODUCT'));
    Route::post('edit/{id}', [ProductController::class, 'edit'])->name(config('shin.route.EDIT_PRODUCT'));
    Route::put('update/{id}', [ProductController::class, 'update'])->name('shin.route.UPDATE_PRODUCT');
    Route::get('show/{id}', [ProductController::class, 'show'])->name(config('shin.route.SHOW_PRODUCT'));
//    Route::delete('destroy' ,[ProductController::class, 'destroy'])->name(config('shin.route.DESTROY_PRODUCT'));
});

Route::prefix('detail_animal')->group(function (){
    Route::get('/',[DetailAnimalController::class, 'index'])->name(config('shin.route.DETAIL_ANIMAL'));
    Route::get('create', [DetailAnimalController::class, 'create'])->name(config('shin.route.CREATE_DETAIL_ANIMAL'));
    Route::post('store', [DetailAnimalController::class, 'store'])->name(config('shin.route.STORE_DETAIL_ANIMAL'));
    Route::get('edit/{id}', [DetailAnimalController::class, 'edit'])->name(config('shin.route.EDIT_DETAIL_ANIMAL'));
    Route::put('update/{id}', [DetailAnimalController::class, 'update'])->name('shin.route.UPDATE_DETAIL_ANIMAL');
    Route::get('show/{id}', [DetailAnimalController::class, 'show'])->name(config('shin.route.SHOW_DETAIL_ANIMAL'));
});

Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name(config('shin.route.BLOG'));

});
Route::prefix('images')->group(function () {
    Route::get('/', [ImageController::class, 'index'])->name(config('shin.route.IMG'));
    Route::get('create', [ImageController::class, 'create'])->name(config('shin.route.CREATE_IMG'));
    Route::post('store',[ImageController::class,'store'])->name(config('shin.route.STORE_IMG'));
});

