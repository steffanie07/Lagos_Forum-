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

Route::get('/', [App\Http\Controllers\Controller::class, 'homepage'])->name('homepage');

Route::get('/addbusiness', [App\Http\Controllers\Controller::class, 'addbusiness'])->name('addbusiness');

Route::post('/uploadbusiness', [App\Http\Controllers\Controller::class, 'uploadbusiness'])->name('uploadbusiness');


