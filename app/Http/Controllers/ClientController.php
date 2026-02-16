<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // ------------- LISTAGEM DE CLIENTES ------------

   public function index(Request $request)
    {
        
        $search = $request->query('search', '');
        // O método when() só executa a query de busca se a variável $search não estiver vazia
        $clients = Client::when($search, function ($query, $search) {
                return $query->where('nameCompleto', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
            })
            ->orderBy('id', 'desc') 
            ->withQueryString(); // Mantém os parâmetros de busca na URL ao trocar de página
        return view('index', compact('clients', 'search'));
    }
    // ------------- CADASTRO DE CLIENTE ------------
    public function cadastro()
    {
        return view('cadastro'); 
    }


    public function store(Request $request){
        $request->validate([
            'nameCompleto' => 'required|min:3',
            'email'        => 'required|email|unique:clients,email', 
            'telefone'     => 'nullable',
        ]);

        $client = Client::create($request->all());
        
        if (!$client) {
            return redirect()->route('clients.cadastro') -> with('error', 'Ocorreu um erro no cadastro!');
        }

        return redirect()->route('clients.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    // ------------- EDIÇÃO DE CLIENTE ------------

    public function edicao($id){
        $client = \App\Models\Client::findOrFail($id);
        return view('edicao', compact('client'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nameCompleto' => 'required|min:3',   
            // A regra 'unique' ignora o ID do cliente atual para permitir salvar sem mudar o e-mail
            'email' => 'required|email|unique:clients,email,'.$id, 
            'telefone' => 'nullable', 
            ]);
        $client = \App\Models\Client::findOrFail($id);
        $client -> update($request -> all());
        
        return redirect() -> route('clients.index') -> with('success', 'Cliente atualizado com sucesso!');
    }

    // ------------- DELEÇÃO DE CLIENTE ------------
    

    public function delete(Request $request, $id){

        $client = \App\Models\Client::findOrFail($id);
        $client -> delete();

        return redirect() -> route('clients.index') -> with('success', 'Cliente deletado com sucesso!');
    }
}
