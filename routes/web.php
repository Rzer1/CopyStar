<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/aboutcompany', [App\Http\Controllers\MainController::class, 'aboutcompany']);
Route::get('/catalog', [App\Http\Controllers\MainController::class, 'catalog']);
Route::get('/product/{id}', [App\Http\Controllers\MainController::class, 'product']);
Route::get('/mapcontacts', [App\Http\Controllers\MainController::class, 'mapcontacts']);

Route::get('/cart', [App\Http\Controllers\MainController::class, 'hide']);
Route::get('/cart/productadd/{id}', [App\Http\Controllers\MainController::class, 'productaddadd']);
Route::get('/cart/pluscount', [App\Http\Controllers\MainController::class, 'pluscount']);
Route::get('/cart/minuscount', [App\Http\Controllers\MainController::class, 'minuscount']);

