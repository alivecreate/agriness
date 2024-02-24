<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\PageController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;


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

$adminName = 'powerup';

Route::prefix('/' . $adminName)->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('slider', SliderController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);

});

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'about'])->name('about');



Route::fallback(function () {
    // return (redirect(route('index')));
    abort(404);
});
