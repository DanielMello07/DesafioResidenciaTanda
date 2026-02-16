@extends('layouts.app') 
@section('content')
    <h1>Edição de Clientes</h1>
    <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-10"> 
                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <form action="{{ route('clients.update', $client -> id) }}" method="POST">
                            @csrf 
                            <div class="mb-3">
                                <label>Nome Completo</label>
                                <input type="text" name="nameCompleto" class="form-control border-dark @error('nameCompleto') is-invalid @enderror"  value="{{$client -> nameCompleto}}" required>
                                @error('nameCompleto')
                                    <div class="invalid-feedback">
                                        Este campo não deve estar vazio.
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control border-dark @error('email') is-invalid @enderror" value="{{$client -> email}}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        Este e-mail já está cadastrado em nosso sistema.
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Telefone (Opcional)</label>
                                <input type="text" name="telefone" class="form-control border-dark" value="{{$client -> telefone}}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success float-end">Salvar Edição</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection