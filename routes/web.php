<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('jabatan')->group(function () {
    Route::get('/', [JabatanController::class, 'index']);
    Route::get('/create', [JabatanController::class, 'create']);
    Route::post('/edit', [JabatanController::class, 'edit']);
    Route::post('/destroy/{id}', [JabatanController::class, 'destroy']);
});
