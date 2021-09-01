<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
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

Route::get('todos', [TodoController::class, 'index']);
Route::post('store-todo', [TodoController::class, 'store']);
Route::post('delete-todo', [TodoController::class, 'delete']);
Route::post('mark-as-done', [TodoController::class, 'markAsDone']);
Route::post('mark-as-undone', [TodoController::class, 'markAsUnDone']);
