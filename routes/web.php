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
use Illuminate\Support\Facades\Route;
/*Rotas Site*/

Route::get('/', 'Site\HomeController@index');

/*Rotas Painel*/

Route::prefix('painel')->group(function () {

    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@autenticacao');

    Route::get('register', 'Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@register');

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    Route::resource('usuarios', 'Admin\UsuariosController');

    Route::get('perfil', 'Admin\PerfilController@index')->name('perfil');
    Route::put('perfilsalvar', 'Admin\PerfilController@salvar')->name('perfil.salvar');

    Route::get('configuracoes','Admin\ConfiguracaoController@index')->name('configuracao');
    Route::put('configuracoes','Admin\ConfiguracaoController@salvar')->name('configuracao.salvar');

});
