<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-page', [OrderController::class, 'index']);

Route::get('/admin-page/cloth', [OrderController::class, 'create'])->name('indexcloth');
Route::get('/admin-page/cloth/add', [OrderController::class, 'create'])->name('addcloth');
Route::post('/admin-page/cloth/store', [OrderController::class, 'store'])->name('storecloth');

Route::get('/admin-page/cloth/edit/{id}', [OrderController::class, 'edit'])->name('editcloth');
Route::put('/admin-page/cloth/update/{id}', [OrderController::class, 'update'])->name('updatecloth');
Route::delete('/admin-page/cloth/delete/{id}', [OrderController::class, 'delete'])->name('deletecloth');