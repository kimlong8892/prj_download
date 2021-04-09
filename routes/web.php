<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'Index'])->name('home');

Route::get('/get-list-video', [\App\Http\Controllers\HomeController::class, 'getListFormatVideo'])->name('ajax.get_list_format_video');

Route::get('/download-video', [\App\Http\Controllers\HomeController::class, 'downloadVideo'])->name('download.video');

Route::post('/', [\App\Http\Controllers\HomeController::class, 'indexPost'])->name('home.post');
