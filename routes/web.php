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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'administracao', 'before' => 'auth'], function() {

    Route::group(['prefix' => 'pessoas'], function() {
        Route::get('index', 'PessoaController@index');
        Route::get('consultar/{id}', 'PessoaController@consultar');
        Route::post('gravar', 'PessoaController@gravar');
    });

    Route::group(['prefix' => 'usuarios'], function() {
        Route::get('index', 'UserController@index');
        Route::get('consultar/{id}', 'UserController@consultar');
        Route::post('gravar', 'UserController@gravar');
    });

    Route::group(['prefix' => 'produtos'], function() {
        Route::get('index', 'ProdutoController@index');
        Route::get('consultar/{id}', 'ProdutoController@consultar');
        Route::post('gravar', 'ProdutoController@gravar');
    });

    Route::group(['prefix' => 'operacoes'], function() {
        Route::get('index', 'OperacaoController@index');
        Route::get('consultar/{id}', 'OperacaoController@consultar');
        Route::post('gravar', 'OperacaoController@gravar');
    });

    Route::group(['prefix' => 'sites'], function() {
        Route::get('index', 'SiteController@index');
        Route::get('consultar/{id}', 'SiteController@consultar');
        Route::post('gravar', 'SiteController@gravar');
    });
});


/* Modelo de rotas
Route::group(['prefix' => 'admin'], function() {
    Route::get('posts', 'PostController@index');
    Route::get('accounts', 'AccountController@index');
    Route::post('dashboard', 'DashboardController@index')
});
 */