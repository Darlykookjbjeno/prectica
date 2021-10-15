<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource(name: 'roles/v1', controller: 'App\Http\Controllers\RoleController');
Route::get(uri: 'roles-users/v1/{role}', action: [RoleController::class, 'users']);
Route::apiResource(name: 'permissions/v1', controller: 'App\Http\Controllers\PermisoController');
Route::get(uri: 'permissions-roles/v1', action: [PermisoController::class, 'roles']);
Route::get(uri: 'roles-permissions/v1/{role}', action: [PermisoController::class, 'permissions']);
Route::delete(uri: 'permissions-delete/v1/{permission}/{role}', action: [PermisoController::class, 'destroy']);

Route::apiResource(name: '/sessions/v1', controller: 'App\Http\Controllers\SessionController');
Route::get(uri:'/status-users/v1', action: [SessionController::class, 'getUsers']);
Route::apiResource(name: 'users/v1', controller: 'App\Http\Controllers\UsuarioController');
Route::put(uri: 'users-session/v1/{email}/{session}', action: [UsuarioController::class, 'updateSession']);

Route::post(uri: '/login/v1', action: [LoginController::class, 'store']);