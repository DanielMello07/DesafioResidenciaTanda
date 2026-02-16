<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
   public function index(Request $request)
    {
        
        $search = $request->query('search', '');
        $clients = Client::when($search, function ($query, $search) {
                return $query->where('nameCompleto', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
            })
            ->orderBy('id', 'desc') 
            ->withQueryString(); 
        return view('index', compact('clients', 'search'));
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

    public function cadastro()
    {
        return view('cadastro'); 
    }

    public function edicao($id){
        $client = \App\Models\Client::findOrFail($id);
        return view('edicao', compact('client'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nameCompleto' => 'required|min:3',   
            'email' => 'required|email|unique:clients,email,'.$id, 
            'telefone' => 'nullable', 
            ]);
        $client = \App\Models\Client::findOrFail($id);
        $client -> update($request -> all());
        
        return redirect() -> route('clients.index') -> with('success', 'Cliente atualizado com sucesso!');
    }

    public function delete(Request $request, $id){

        $client = \App\Models\Client::findOrFail($id);
        $client -> delete();

        return redirect() -> route('clients.index') -> with('success', 'Cliente deletado com sucesso!');
    }
}
