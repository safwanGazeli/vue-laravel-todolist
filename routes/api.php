<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FileUploadsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return false;
});


Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('todos', [TodoController::class, 'index']);

Route::post('add/todo', [TodoController::class, 'store']);

Route::get('delete/todo/{id}', [TodoController::class, 'destroy']);

Route::post('update/todo/{id}', [TodoController::class, 'update']);

Route::put('/{todo}/active', [TodoController::class, 'makeActive'])->name('admin.category.active');

Route::get('/login', [LoginController::class, 'login']);

Route::get('files', [FileUploadsController::class, 'index']);

Route::put('/{file}/active', [FileUploadsController::class, 'makeActive'])->name('admin.category.active');


