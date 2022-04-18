<?php

use Illuminate\support\Facades\Route;
use app\Http\Controllers\product;

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

Route::get('product.register', function () {
    return view('welcome');
});

Route::get('product.register',[product::class,'register'] );
    rout::post('product.register',[product::class,'store']);


