@extends('layouts.app')

@section('content')
    <h1>Listagem de Clientes</h1>
    <div class="container mt-5"> 
        <div class="row justify-content-center">
            <div class="col-md-10"> 
                <div class="d-flex justify-content-between align-items-center mb-3">
                    
                    <a href="{{route('clients.cadastro')}}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Adicionar Cliente
                    </a>
                </div>

                <div class="card shadow-sm"> 
                    <div class="card-body">
                        <table class="table table-hover"> 
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
                                    <tr class="text-center">
                                        <th scope="row">{{$item -> id}}</th>
                                        <td>{{$item -> nameCompleto}}</td>
                                        <td>{{$item -> email}}</td>
                                        <td>{{$item -> telefone ?? '-'}}</td>
                                        <td>{{$item -> created_at -> format('d/m/y')}}</td>
                                        <td>
                                            <a href="" title="Editar"><i class="bi bi-pencil-square text-primary"></i></a>
                                            <a href="" title="Excluir"><i class="bi bi-x-circle-fill text-danger"></i></a>
                                            <a href="{{ route('clients.show', $item->id) }}" title="Ver detalhes"><i class="bi bi-search"></i></a>
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection