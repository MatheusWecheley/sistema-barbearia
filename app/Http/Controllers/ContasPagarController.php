<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContasPagar;
use Illuminate\Http\Request;

class ContasPagarController extends Controller
{
    public function index(){
        $contas = ContasPagar::get();
        return view('contas.home', ['contas' => $contas]);
    }

    public function create(){
        return view('contas.create');
    }

    public function store(Request $request){
        $conta = new ContasPagar;

        $conta->conta = $request->conta;
        $conta->dataVencimento = $request->dataVencimento;
        $conta->valor = $request->valor;

        $conta->save();

        return redirect('/contas');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contas = ContasPagar::findOrFail($id);

        return view('contas.edit', ['contas' => $contas]);
    }


    public function update(Request $request)
    {
        ContasPagar::findOrFail($request->id)->update($request->all());

        return redirect('/contas');
    }


    public function destroy($id)
    {
        ContasPagar::findOrFail($id)->delete();

        return redirect('/contas');
    }
}
