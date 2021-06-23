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

    // USUÁRIOS
    Route::get('/usuarios', 'App\Http\Controllers\Admin\UserController@index')->name('admin.users');
    Route::get('/usuarios/list', 'App\Http\Controllers\Admin\UserController@list')->name('admin.users.list');
    Route::get('/usuarios/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('admin.users.edit');
    Route::post('/usuarios/save/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('admin.users.save');
    Route::post('/usuarios/delete/{id}', 'App\Http\Controllers\Admin\UserController@destroy')->name('admin.users.delete');

    // MODELO DE RESRPOSTAS
    Route::get('/modelo-de-resposta', 'App\Http\Controllers\Admin\ModelanswerController@index')->name('admin.models');
    Route::get('/modelo-de-resposta/list', 'App\Http\Controllers\Admin\ModelanswerController@list')->name('admin.models.list');
    Route::get('/modelo-de-resposta/edit/{id}', 'App\Http\Controllers\Admin\ModelanswerController@edit')->name('admin.models.edit');
    Route::post('/modelo-de-resposta/save/{id}', 'App\Http\Controllers\Admin\ModelanswerController@update')->name('admin.models.save');
    Route::post('/modelo-de-resposta/delete/{id}', 'App\Http\Controllers\Admin\ModelanswerController@destroy')->name('admin.models.delete');

    // DOCUMENTOS
    Route::get('/documentacao', 'App\Http\Controllers\Admin\DocumentationController@index')->name('admin.documentations');
    Route::get('/documentacao/list', 'App\Http\Controllers\Admin\DocumentationController@list')->name('admin.documentations.list');
    Route::get('/documentacao/edit/{id}', 'App\Http\Controllers\Admin\DocumentationController@edit')->name('admin.documentations.edit');
    Route::post('/documentacao/save/{id}', 'App\Http\Controllers\Admin\DocumentationController@update')->name('admin.documentations.save');
    Route::post('/documentacao/delete/{id}', 'App\Http\Controllers\Admin\DocumentationController@destroy')->name('admin.documentations.delete');

    // RESPOSTAS
    Route::get('/respostas', 'App\Http\Controllers\Admin\AnswerController@index')->name('admin.answers');
    Route::get('/respostas/list', 'App\Http\Controllers\Admin\AnswerController@list')->name('admin.answers.list');
    Route::get('/respostas/edit/{id}', 'App\Http\Controllers\Admin\AnswerController@edit')->name('admin.answers.edit');
    Route::post('/respostas/save/{id}', 'App\Http\Controllers\Admin\AnswerController@update')->name('admin.answers.save');
    Route::post('/respostas/delete/{id}', 'App\Http\Controllers\Admin\AnswerController@destroy')->name('admin.answers.delete');
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

    Route::post('/disciplina', 'App\Http\Controllers\AnswerController@disciplinaStore')->name('disciplina.store');
    Route::post('/metodologia', 'App\Http\Controllers\AnswerController@metodologiaStore')->name('metodologia.store');
    Route::post('/cursoads', 'App\Http\Controllers\AnswerController@cursoadsStore')->name('cursoads.store');
    Route::post('/professores', 'App\Http\Controllers\AnswerController@professoresStore')->name('professores.store');
    Route::post('/coordenacao', 'App\Http\Controllers\AnswerController@coordenacaoStore')->name('coordenacao.store');
    Route::post('/curso-atividade', 'App\Http\Controllers\AnswerController@cursoatividadeStore')->name('cursoatividade.store');
    Route::post('/intercambio', 'App\Http\Controllers\AnswerController@intercambioStore')->name('intercambio.store');
    Route::post('/estagio-tcc-projeto', 'App\Http\Controllers\AnswerController@estagioStore')->name('estagio.store');
    Route::post('/infra', 'App\Http\Controllers\AnswerController@infraStore')->name('infra.store');

    Route::get('/email', function() {
        return new \App\Mail\agradecimento();
    });

    Route::get('/enviando-email', function() {
        $email = new \App\Mail\agradecimento();

        $email->subject = 'Pesquisa de Satisfação AURA';
        $user = (object)[
            'email' => 'alini.canedo@gmail.com',
            'name' => 'Alini'
        ];

        \Illuminate\Support\Facades\Mail::to($user)->send($email);

        return 'E-mail enviado';
    });

Auth::routes(); 
