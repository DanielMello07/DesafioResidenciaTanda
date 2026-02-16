<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'index'])->name('clients.index');
Route::post('/store', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clientes/cadastrar', [ClientController::class, 'cadastro'])->name('clients.cadastro');
Route::get('/clientes/edicao/{id}', [ClientController::class, 'edicao'])->name('clients.edicao');
Route::post('/cliente/atualizar/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/cliente/excluir/{id}', [ClientController::class, 'delete'])->name('clients.delete');
