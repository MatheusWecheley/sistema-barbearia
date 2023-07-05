<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::get();
        return view('produtos.home', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $produto = new Produtos();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->valor = $request->valor;

        $produto->save();

        return redirect('/produtos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produto = Produtos::findOrFail($id);

        return view('produtos.edit', ['produto' => $produto]);
    }


    public function update(Request $request)
    {
        Produtos::findOrFail($request->id)->update($request->all());

        return redirect('/produtos')->with('msg', 'Servico atualizado com sucesso!');
    }


    public function destroy($id)
    {
        Produtos::findOrFail($id)->delete();

        return redirect('/produtos')->with('msg', 'Servico excluído com sucesso!');
    }
}
