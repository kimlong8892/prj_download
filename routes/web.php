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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'Index'])->name('download-video-youtube');

Route::get('/get-list-video', [\App\Http\Controllers\HomeController::class, 'getListFormatVideo'])->name('ajax.get_list_format_video');

Route::get('/download-video', [\App\Http\Controllers\HomeController::class, 'downloadVideo'])->name('download.video');

Route::post('/', [\App\Http\Controllers\HomeController::class, 'indexPost'])->name('home.post');


Route::get('/view-share-video',  [\App\Http\Controllers\ViewVideoShare::class, 'Index'])->name('view-share-video');


Route::prefix('user')->group(function () {
    Route::post('/reg', [\App\Http\Controllers\UserController::class, 'regPost'])->name('user.reg.post');
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'loginPost'])->name('user.login.post');

    Route::get('/reg', [\App\Http\Controllers\UserController::class, 'Reg'])->name('user.reg');
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'Login'])->name('user.login');

    Route::get('/logout', function (){
        Auth::logout();
        return back();
    })->name('user.logout');
});
