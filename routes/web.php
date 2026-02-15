<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'index'])->name('clients.index');
Route::post('/store', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clientes/cadastrar', [ClientController::class, 'cadastro'])->name('clients.cadastro');
Route::get('/cliente/{id}', [ClientController::class, 'show'])->name('clients.show');
