<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navigation;

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

Route::get('/',[navigation::class, 'index']);
Route::get('/about', [navigation::class, 'aboutMe']);
Route::get('/game', [navigation::class, 'game']);