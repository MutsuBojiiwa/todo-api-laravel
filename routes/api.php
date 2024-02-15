<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('todo', [TodoController::class, 'create']);
Route::get('todo', [TodoController::class, 'fetchAll']);
Route::get('todo/{id}', [TodoController::class, 'fetch']);
Route::put('todo/{id}', [TodoController::class, 'update']);
Route::delete('todo', [TodoController::class, 'delete']);
