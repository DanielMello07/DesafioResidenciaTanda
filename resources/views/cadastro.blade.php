@extends('layouts.app') 
@section('content')
    <h1>Cadastro de Clientes</h1>
    <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-10"> 
                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf {{-- Token de segurança obrigatório para formulários POST no Laravel --}}
                            <div class="mb-3">
                                <label>Nome Completo</label>
                                {{-- value="{{ old('nameCompleto') }}" mantém o que o usuário digitou caso a validação falhe --}}
                                <input type="text" name="nameCompleto" class="form-control border-dark @error('nameCompleto') is-invalid @enderror" value="{{old('nameCompleto')}}" required>
                                @error('nameCompleto')
                                    <div class="invalid-feedback">
                                        Este campo não deve estar vazio.
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control border-dark @error('email') is-invalid @enderror" value="{{old('email')}}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        Este e-mail já está cadastrado em nosso sistema.
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Telefone (Opcional)</label>
                                <input type="text" name="telefone" class="form-control border-dark" value="{{old('telefone')}}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success float-end">Salvar Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection