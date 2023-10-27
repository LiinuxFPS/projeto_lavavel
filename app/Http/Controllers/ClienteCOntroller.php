<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DadosCliente;

class ClienteCOntroller extends Controller
{
    public function teste(){

        /*
        echo '<pre>';
        print_r($request->all());
        echo '<pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */

        //======================================
        /*        
        $salvar = new DadosCliente();
        $salvar->nome = $request->input('nome');
        $salvar->email = $request->input('email');
        //print_r($salvar->getAttributes());
        $salvar->save();
        */
        //=======================================
        
        /*
        $salvar = new DadosCliente();
        $salvar->fill($request->all());
        print_r($salvar->getAttributes());
        $salvar->save();
        */
        //$dados = DadosCliente::all();
        //dd($dados);
        return view('cliente');
    }
    public function salvar(Request $request){
        
        $request->validate([
            'nome'=>'required|min:3|max:20|unique:dados_clientes',
            'email'=>'email',
            'telefone'=>'required'
        ]);
        $salvar = new DadosCliente();
        $salvar->create($request->all());

        return redirect()->route('app.cadastrar');
    }

    public function listaClientes(){
        $dados = DadosCliente::all();
        //dd($dados);
        return view('_componentes.lista')->with('dados', $dados);
        //return view('_componentes.lista');
    }
}
