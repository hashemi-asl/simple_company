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
Route::get('/',[\App\Http\Controllers\IndexController::class,"index"]);
//end website route

/* back-end route */
Route::middleware('auth')
    ->prefix('administrator/panel')
    ->group(
        function (){
            Route::get('/admin',[\App\Http\Controllers\Administrator\AdminController::class,'index'])->name('admin');
            Route::post('/test',function (){
               \Illuminate\Support\Facades\Auth::logout();
            });
        }
    );
/* end back-end route */
