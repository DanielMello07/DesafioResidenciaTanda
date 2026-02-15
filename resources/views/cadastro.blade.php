@extends('layouts.app') 
@section('content')
    <h1>Cadastro de Clientes</h1>
    <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-10"> 
                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf <div class="mb-3">
                                <label>Nome Completo</label>
                                <input type="text" name="nameCompleto" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Telefone (Opcional)</label>
                                <input type="text" name="telefone" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Salvar Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection