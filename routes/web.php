<?php

use App\Http\Controllers\GoogleProviderController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Two\GoogleProvider;

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

Route::get(uri: '/auth/{url}/{urlFail}', action: [GoogleProviderController::class, 'redirect']);
Route::get(uri: '/google-callback', action: [GoogleProviderController::class, 'receive']);
