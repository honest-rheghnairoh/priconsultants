<?php

use App\Http\Controllers\Admin\HomeSectionController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'login' => true,
        'logout' => true,
        'register' => false,
        'reset' => false,
        'confirm' => false,
        'verify' => false,
    ]);

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    // home section
    Route::get(
        'home/{homeSection}/edit',
        [HomeSectionController::class, 'edit']
    )->name('home.edit');
    Route::post(
        'home/{homeSection}',
        [HomeSectionController::class, 'update']
    )->name('home.update');
});
