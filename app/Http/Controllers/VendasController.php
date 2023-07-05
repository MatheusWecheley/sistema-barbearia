<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\Produtos;
use App\Models\Servicos;
use App\Models\Vendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendasController extends Controller
{
    public function index(){
        $vendas = Vendas::get();
        $clientes = DB::table('clientes')->get();
        $servicos = DB::table('servicos')->get();
        $produtos = DB::table('produtos')->get();
        return view('vendas.list', compact('vendas', 'servicos', 'clientes', 'produtos'));
    }


    public function create(){
        $clientes = DB::table('clientes')->get();
        $servicos = DB::table('servicos')->get();
        $produtos = DB::table('produtos')->get();
        return view('vendas.create', compact('clientes','servicos', 'produtos'));
    }

    public function store(Request $request){
        $venda = new Vendas;

        $venda->cliente = $request->cliente;
        $venda->servico = $request->servico;
        $venda->produto = $request->produto;
        $venda->valorServico = $request->valorServico;
        $venda->valorProduto = $request->valorProduto;
        $venda->valorTotal = $request->valorTotal;


        $venda->save();

        return redirect('/vendas');
    }

    public function show($id)
    {
        //
    }

    public function edit($idCliente, $idServico, $idProduto)
    {
        $cliente = Clientes::findOrFail($idCliente);
        $servico = Servicos::findOrFail($idServico);
        $produto = Produtos::findOrFail($idProduto);

        return view('vendas.edit', compact('cliente', 'servico', 'produto'));
    }


    public function update(Request $request)
    {
        Vendas::findOrFail($request->id)->update($request->all());

        return redirect('/vendas')->with('msg', 'Venda atualizado com sucesso!');
    }


    public function destroy($id)
    {
        Vendas::findOrFail($id)->delete();

        return redirect('/vendas')->with('msg', 'Venda excluído com sucesso!');
    }
}
