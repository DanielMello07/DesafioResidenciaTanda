@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show bg-" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>Listagem de Clientes</h1>
    <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-10"> 
                <div class="d-flex justify-content-between align-items-center mb-4">
                     <a href="{{route('clients.cadastro')}}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle"></i> Adicionar Cliente
                    </a>
                    
                    <form action="{{ route('clients.index') }}" method="GET" class="d-flex" style="max-width: 400px;">
                        <div class="input-group input-group-sm">
                            <input type="text" name="search" class="form-control border-secondary" placeholder="Pesquisar..." value="{{ $search }}">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <table class="table table-hover p-5"> 
                            <thead> 
                                <tr class="text-center">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome Completo</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Data de Cadastro</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($clients as $item)
                                    <tr class="text-center align-middle">
                                        <th scope="row">{{$item -> id}}</th>
                                        <td>{{$item -> nameCompleto}}</td>
                                        <td>{{$item -> email}}</td>
                                        <td>{{$item -> telefone ?? '-'}}</td>
                                        <td>{{$item -> created_at -> format('d/m/y')}}</td>
                                        <td class="align-middle">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                <a href="{{ route('clients.edicao', $item->id) }}" title="Editar" class="text-decoration-none">
                                                    <i class="bi bi-pencil-square text-primary fs-5"></i>
                                                </a>
                                                
                                                <form action="{{ route('clients.delete', $item->id) }}" method="POST" class="d-inline m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0 border-0" title="Excluir" onclick="return confirm('Deseja realmente excluir este cliente?')">
                                                        <i class="bi bi-x-circle-fill text-danger fs-5"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center paginacao">
                            {{ $clients->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection