<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
// 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
// |
*/
Route::get('/', [SiteController::class, 'index']);
Route::get('/ex2', [SiteController::class, 'ex2']);
Route::get('/principal', [SiteController::class, 'site']);
Route::get('/principal2', [SiteController::class, 'site2']);