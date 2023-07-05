<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Clientes::get();

        return view('clientes.home', ['clientes' => $clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Clientes;

        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->celular = $request->celular;
        $cliente->cpf = $request->cpf;

        $cliente->save();

        return redirect('/clientes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);

        return view('clientes.edit', ['cliente' => $cliente]);
    }


    public function update(Request $request)
    {
        Clientes::findOrFail($request->id)->update($request->all());

        return redirect('/clientes')->with('msg', 'Cliente atualizado com sucesso!');
    }


    public function destroy($id)
    {
        Clientes::findOrFail($id)->delete();

        return redirect('/clientes')->with('msg', 'Evento excluído com sucesso!');
    }

}
