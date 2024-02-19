<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\front\PageController;


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

    Route::get('/category', function () {
        return 'Category page';
    })->name('admin.category');

    Route::get('/product', function () {
        return 'product page';
    })->name('admin.product');


    Route::resource('slider', SliderController::class);

});

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'about'])->name('about');



Route::fallback(function () {
    // return (redirect(route('index')));
    abort(404);
});
