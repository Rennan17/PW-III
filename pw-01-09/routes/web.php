<?php
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/contato','ContatoController@index');
Route::get('contato', [ContatoController::class, 'index']);
Route::get('categoria', [CategoriaController::class, 'index']);
Route::get('cliente', [ClienteController::class, 'index']);
Route::get('produto', [ProdutoController::class, 'index']);
Route::get('pedido', [PedidoController::class, 'index']);
//Route::get('/categoria','CategoriaController@index');

