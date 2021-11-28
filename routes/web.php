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


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//website route
Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('/');
//end website route

/* back-end route */
//Route::middleware('auth')
Route::prefix('administrator/panel')
    ->group(
        function () {
            Route::get('/admin', [\App\Http\Controllers\Administrator\AdminController::class, 'index'])->name('admin');

            Route::post('/test', function () {
                \Illuminate\Support\Facades\Auth::logout();
            });

            Route::resource('/seo', \App\Http\Controllers\Administrator\SeoController::class)->parameters(['seo' => 'id']);

            Route::resource('/parallax',\App\Http\Controllers\Administrator\ParallaxController::class)->parameters(['parallax'=>'id']);
        }
    );
/* end back-end route */
