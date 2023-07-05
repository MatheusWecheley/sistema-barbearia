<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->middleware(['auth', 'verified'])->name('clientes');
Route::get('/clientes/create', [App\Http\Controllers\ClientesController::class, 'create'])->middleware(['auth', 'verified'])->name('clientes');
Route::post('/clientes/new', [App\Http\Controllers\ClientesController::class, 'store']);
Route::get('/clientes/edit/{id}', [App\Http\Controllers\ClientesController::class, 'edit'])->middleware('auth');
Route::put('clientes/update/{id}', [App\Http\Controllers\ClientesController::class, 'update'])->middleware('auth');
Route::delete('clientes/{id}', [App\Http\Controllers\ClientesController::class, 'destroy'])->middleware('auth');

Route::get('/agendamentos', [App\Http\Controllers\AgendamentosController::class, 'index'])->middleware(['auth', 'verified'])->name('agendamentos');
Route::get('/agendamentos/create', [App\Http\Controllers\AgendamentosController::class, 'create'])->middleware(['auth', 'verified'])->name('agendamentos');
Route::post('/agendamentos/new', [App\Http\Controllers\AgendamentosController::class, 'store']);
Route::get('/agendamentos/edit/{idCliente}/{idServico}/{idProduto}', [App\Http\Controllers\VendasController::class, 'edit'])->middleware('auth');
Route::put('agendamentos/update/{id}', [App\Http\Controllers\AgendamentosController::class, 'update'])->middleware('auth');
Route::delete('agendamentos/{id}', [App\Http\Controllers\AgendamentosController::class, 'destroy'])->middleware('auth');

Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'index'])->middleware(['auth', 'verified'])->name('servicos');
Route::get('/servicos/create', [App\Http\Controllers\ServicosController::class, 'create'])->middleware(['auth', 'verified'])->name('servicos');
Route::post('/servicos/new', [App\Http\Controllers\ServicosController::class, 'store']);
Route::get('/servicos/edit/{id}', [App\Http\Controllers\ServicosController::class, 'edit'])->middleware('auth');
Route::put('servicos/update/{id}', [App\Http\Controllers\ServicosController::class, 'update'])->middleware('auth');
Route::delete('servicos/{id}', [App\Http\Controllers\ServicosController::class, 'destroy'])->middleware('auth');

Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'index'])->middleware(['auth', 'verified'])->name('produtos');
Route::get('/produtos/create', [App\Http\Controllers\ProdutosController::class, 'create'])->middleware(['auth', 'verified'])->name('produtos');
Route::post('/produtos/new', [App\Http\Controllers\ProdutosController::class, 'store']);
Route::get('/produtos/edit/{id}', [App\Http\Controllers\ProdutosController::class, 'edit'])->middleware('auth');
Route::put('produtos/update/{id}', [App\Http\Controllers\ProdutosController::class, 'update'])->middleware('auth');
Route::delete('produtos/{id}', [App\Http\Controllers\ProdutosController::class, 'destroy'])->middleware('auth');

Route::get('/vendas', [App\Http\Controllers\VendasController::class, 'index'])->middleware(['auth', 'verified'])->name('vendas');
Route::get('/vendas/create', [App\Http\Controllers\VendasController::class, 'create'])->middleware(['auth', 'verified'])->name('vendas');
Route::post('/vendas/new', [App\Http\Controllers\VendasController::class, 'store']);
Route::get('/vendas/edit/{idCliente}/{idServico}/{idProduto}', 'App\Http\Controllers\VendasController@edit')->middleware('auth');
Route::put('vendas/update/{id}', [App\Http\Controllers\VendasController::class, 'update'])->middleware('auth');
Route::delete('vendas/{id}', [App\Http\Controllers\VendasController::class, 'destroy'])->middleware('auth');

Route::get('/contas', [App\Http\Controllers\ContasPagarController::class, 'index'])->middleware(['auth', 'verified'])->name('vendas');
Route::get('/contas/create', [App\Http\Controllers\ContasPagarController::class, 'create'])->middleware(['auth', 'verified'])->name('vendas');
Route::post('/contas/new', [App\Http\Controllers\ContasPagarController::class, 'store']);
Route::get('/contas/edit/{id}', [App\Http\Controllers\ContasPagarController::class, 'edit'])->middleware('auth');
Route::put('contas/update/{id}', [App\Http\Controllers\ContasPagarController::class, 'update'])->middleware('auth');
Route::delete('contas/{id}', [App\Http\Controllers\ContasPagarController::class, 'destroy'])->middleware('auth');


