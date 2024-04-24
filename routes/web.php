<?php

use App\Http\Controllers\TodoTaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoTaskController::class, 'index']) -> name('home');
Route::post('/', [TodoTaskController::class, 'tambah']);
Route::delete('/hapus/{id}', [TodoTaskController::class, 'destroy']);
