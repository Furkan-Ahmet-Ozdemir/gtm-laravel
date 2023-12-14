<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return view('welcome');
});

Route::get('/items/{itemId}',            [ItemController::class, 'viewItem']);
Route::post('/items/{itemId}/addToCart', [ItemController::class, 'addToCart']);
Route::get('/cart',                      [ItemController::class, 'viewCart']);
Route::post('/purchase',                 [ItemController::class, 'purchase']);


