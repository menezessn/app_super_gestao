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

/* Route::get('/', function () {
    return "Seja bem vindo";
}); */

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return "login";
})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function () {
        return "clientes"; 
    })->name('app.clientes');
    Route::get('/fornecedores', "FornecedoresController@index")->name('app.fornecedores');
    Route::get('/produtos', function () {
        return "produtos";
    })->name('app.produtos');
});




Route::get('/contato/{nome}/{categoria}', 
            function(string $nome, int $categoria){
                echo "Estamos aqui: $nome - $categoria";
            })->where('categoria','[0-9]+')->where('nome','[A-Za-z]+');

Route::fallback(function(){
    echo 'A página acessada não existe. <a href="'. route("site.index") . '">Clique aqui</a> para voltar para página inicial';
});
