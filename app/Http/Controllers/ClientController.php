<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index(){
        // Busca os clientes no banco (Requisito 1)
        $clients = \App\Models\Client::paginate(10); 
        // Retorna a view 'index.blade.php', que já estende o 'app.blade.php'
        return view('index', compact('clients'));
    }

    public function store(Request $request){
        $request->validate([
            'nameCompleto' => 'required|min:3',
            'email'        => 'required|email|unique:clients,email', // Garante e-mail único no banco
            'telefone'     => 'nullable', // Telefone é opcional
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function cadastro()
    {
        return view('cadastro'); 
    }

    public function show($id){
        $client = \App\Models\Client::findOrFail($id);
        return view('show', compact('client'));
    }

    public function update(){

    }

    public function delete($id){

    }
}
