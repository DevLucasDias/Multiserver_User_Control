<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ShowController;



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

Route::get('/', [LoginController::class, 'Login']);

Route::get('/App/Administration', [LoginController::class, 'UserAdmin']);

Route::get('/Content', [ContentController::class, 'Content']);




Route::post('/Acess', [LoginController::class, 'Acess']);

