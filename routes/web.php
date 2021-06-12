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

    // PERGUNTAS
    Route::get('/usuarios', 'App\Http\Controllers\Admin\UserController@index')->name('admin.users');
    Route::get('/usuarios/list', 'App\Http\Controllers\Admin\UserController@list')->name('admin.users.list');
    Route::get('/usuarios/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('admin.users.edit');
    Route::post('/usuarios/save/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('admin.users.save');
    Route::post('/usuarios/delete/{id}', 'App\Http\Controllers\Admin\UserController@destroy')->name('admin.users.delete');
});
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home'); 
    Route::get('/disciplina', 'App\Http\Controllers\AnswerController@disciplina')->name('answer.disciplina');

    Route::get('/metodologia', 'App\Http\Controllers\AnswerController@metodologia')->name('answer.metodologia');
    Route::get('/cursoads', 'App\Http\Controllers\AnswerController@cursoads')->name('answer.curso');
    Route::get('/professores', 'App\Http\Controllers\AnswerController@professores')->name('answer.professores');
    Route::get('/coordenacao', 'App\Http\Controllers\AnswerController@coordenacao')->name('answer.coordenacao');
    Route::get('/curso-atividade', 'App\Http\Controllers\AnswerController@cursoAtividade')->name('answer.curso-atividade');
    Route::get('/intercambio', 'App\Http\Controllers\AnswerController@intercambio')->name('answer.intercambio');
    Route::get('/estagio-tcc-projeto', 'App\Http\Controllers\AnswerController@estagiotccprojeto')->name('answer.estagiotccprojeto');
    Route::get('/infra', 'App\Http\Controllers\AnswerController@infra')->name('answer.infra');
    Route::post('/disciplina', 'App\Http\Controllers\AnswerController@store')->name('client.store');

    
    Route::get('/mail', function() {
        Mail::send('mail.agradecimento', ['Aura' => 'Obrigado por responder a nossa pesquisa!'], function ($m){
            $m->from('alini.canedo@gmail.com');
            $m->to('alini.canedo@gmail.com');
        });
    });

Auth::routes(); 

