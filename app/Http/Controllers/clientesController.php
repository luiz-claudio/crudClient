<?php

namespace App\Http\Controllers;

use App\clientes;
use App\Http\Requests\clienteRequest;
use Illuminate\Http\Request;


class clientesController extends Controller
{
    public function index()
    {
        $clientes= clientes::All();

        return view('index',compact('clientes'));
    }


    public function create()
    {
        return view('novo');
    }


    public function store(clienteRequest $request)
    {
        $cliente =new clientes();
        $cliente->nome = $request->nome;
        $cliente->cpf=$request->cpf;
        $cliente->cep=$request->cep;
        $cliente->logradouro=$request->logradouro;
        $cliente->complemento=$request->complemento;
        $cliente->bairro=$request->bairro;
        $cliente->localidade=$request->localidade;
        $cliente->uf=$request->uf;
        $cliente->numero=$request->numero;
        $cliente->telefone=$request->telefone;
        $cliente->ibge=$request->ibge;

        $cliente->save();
        return redirect('/');;


    }


    public function show($id)
    {
        $item = clientes::find($id);
       // return view('visualizar', compact('item'));
        return view('visualizar',compact('item'));
    }



    public function update(clienteRequest $request, $id)
    {
        $cliente = clientes::find($id);
        $cliente->nome = $request->nome;
        $cliente->cpf=$request->cpf;
        $cliente->cep=$request->cep;
        $cliente->logradouro=$request->logradouro;
        $cliente->complemento=$request->complemento;
        $cliente->bairro=$request->bairro;
        $cliente->localidade=$request->localidade;
        $cliente->uf=$request->uf;
        $cliente->numero=$request->numero;
        $cliente->telefone=$request->telefone;
        $cliente->ibge=$request->ibge;

        $cliente->save();


        return redirect('/');

    }

    public function destroy($id)
    {
        clientes::find($id)->delete();
        return redirect('/');



    }
}
