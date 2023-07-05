<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index(){
        $servicos = Servicos::get();
        return view('servicos.home', ['servicos' => $servicos]);
    }

    public function create(){
        return view('servicos.create');
    }

    public function store(Request $request){
        $servico = new Servicos();

        $servico->nome = $request->nome;
        $servico->descricao = $request->descricao;
        $servico->quantidade = $request->quantidade;
        $servico->valor = $request->valor;

        $servico->save();

        return redirect('/servicos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $servico = Servicos::findOrFail($id);

        return view('servicos.edit', ['servico' => $servico]);
    }


    public function update(Request $request)
    {
        Servicos::findOrFail($request->id)->update($request->all());

        return redirect('/servicos')->with('msg', 'Servico atualizado com sucesso!');
    }


    public function destroy($id)
    {
        Servicos::findOrFail($id)->delete();

        return redirect('/servicos')->with('msg', 'Servico excluído com sucesso!');
    }
}
