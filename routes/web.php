<?php

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

Route::get('/finance', function () {
    return view('finance');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/dashboard', function () {
    return response('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/* Ex. parametro em rota */
Route::get('/product/{id}', function ($id) {
    return view('product', ['id' => $id]);
});
