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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/schools','App\Http\Controllers\SchoolController');

Route::resource('/pdf','App\Http\Controllers\PDFController');


Route::get('import_export', 'App\Http\Controllers\ImportExportController@importExport');
Route::post('import', 'App\Http\Controllers\ImportExportController@import');
Route::post('export', 'App\Http\Controllers\ImportExportController@export');



