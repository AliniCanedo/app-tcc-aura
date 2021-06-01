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
Route::prefix('admin')
->middleware(['auth:sanctum', 'role:admin'])
->group(function () {
    // HOME
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('admin.home');
    // CLASSIFICAÇÕES
    Route::get('/classificacoes', 'App\Http\Controllers\Admin\ClassificationController@index')->name('admin.classifications');
    Route::get('/classificacoes/list', 'App\Http\Controllers\Admin\ClassificationController@list')->name('admin.classifications.list');
    Route::get('/classificacoes/edit/{id}', 'App\Http\Controllers\Admin\ClassificationController@edit')->name('admin.classifications.edit');
    Route::post('/classificacoes/save/{id}', 'App\Http\Controllers\Admin\ClassificationController@update')->name('admin.classifications.save');
    Route::post('/classificacoes/delete/{id}', 'App\Http\Controllers\Admin\ClassificationController@destroy')->name('admin.classifications.delete');
});
Route::prefix('aluno')
->middleware(['auth:sanctum', 'role:aluno'])
->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('aluno.home');
});
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Auth::routes();