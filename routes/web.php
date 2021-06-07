<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    // PERGUNTAS
    Route::get('/perguntas', 'App\Http\Controllers\Admin\QuestionController@index')->name('admin.questions');
    Route::get('/perguntas/list', 'App\Http\Controllers\Admin\QuestionController@list')->name('admin.questions.list');
    Route::get('/perguntas/edit/{id}', 'App\Http\Controllers\Admin\QuestionController@edit')->name('admin.questions.edit');
    Route::post('/perguntas/save/{id}', 'App\Http\Controllers\Admin\QuestionController@update')->name('admin.questions.save');
    Route::post('/perguntas/delete/{id}', 'App\Http\Controllers\Admin\QuestionController@destroy')->name('admin.questions.delete');
});
Route::prefix('client')
->middleware(['auth:sanctum', 'role:client'])
->group(function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('client.home');
    Route::get('/respostas', 'App\Http\Controllers\AnswerController@index')->name('client.answer');
    Route::post('/respostas', 'App\Http\Controllers\AnswerController@store')->name('client.store');
    
    Route::get('/mail', function() {
        Mail::send('mail.agradecimento', ['Aura' => 'Obrigado por responder a nossa pesquisa!'], function ($m){
            $m->from('alini.canedo@gmail.com');
            $m->to('alini.canedo@gmail.com');
        });
    });
});

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Auth::routes();
