<?php

use App\Http\Controllers\Shopper\ShopperController;
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

Route::name('check-in')
    ->get('/check-in', [ShopperController::class, 'check_in']);

Route::name('check-in-form')
    ->get('/check-in-form', [ShopperController::class, 'check_in_form']);

