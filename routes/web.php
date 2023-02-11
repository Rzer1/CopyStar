<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [MainController::class, 'aboutcompany']);
Auth::routes();
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route::get('/home', [MainController::class, 'aboutcompany']);
Route::get('/catalog', [MainController::class, 'catalog']);
Route::get('/product/{id}', [MainController::class, 'product']);
Route::get('/mapcontacts', [MainController::class, 'mapcontacts']);

Route::get('/cart', [MainController::class, 'hide']);
Route::get('/cart/productadd/{id}', [MainController::class, 'productaddadd']);
Route::get('/cart/pluscount', [MainController::class, 'pluscount']);
Route::get('/cart/minuscount', [MainController::class, 'minuscount']);
