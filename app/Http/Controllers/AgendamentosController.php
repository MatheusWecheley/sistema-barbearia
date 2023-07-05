<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agendamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AgendamentosController extends Controller
{
    public function index(){
        $agendamentos = DB::table('agendamentos')
            ->join('clientes', 'agendamentos.id_cliente', '=', 'clientes.id')
            ->join('servicos', 'agendamentos.id_servico', '=', 'servicos.id')
            ->leftJoin('produtos', 'agendamentos.id_produto', '=', 'produtos.id')
            ->select('agendamentos.id as id', 'clientes.id as idCliente', 'servicos.id as idServico','produtos.id as idProduto',
                'clientes.nome as cliente', 'servicos.nome as servico', 'produtos.nome as produto', 'agendamentos.data', 'agendamentos.hora')
            ->get();
        return view('agendamentos.list', ['agendamentos' => $agendamentos]);
    }


    public function create(){
        $clientes = DB::table('clientes')->get();
        $servicos = DB::table('servicos')->get();
        $produtos = DB::table('produtos')->get();
        return view('agendamentos.create', compact('clientes','servicos', 'produtos'));
    }

    public function store(Request $request){
        $agendamento = new Agendamentos;

        $agendamento->id_cliente = $request->cliente;
        $agendamento->id_servico = $request->servico;
        $agendamento->id_produto = $request->produto;
        $agendamento->data = $request->data;
        $agendamento->hora = $request->hora;


        print_r($agendamento);

        $agendamento->save();

        return redirect('/agendamentos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $agendamento = Agendamentos::findOrFail($id);

        return view('agendamentos.edit', ['agendamento' => $agendamento]);
    }


    public function update(Request $request)
    {
        Agendamentos::findOrFail($request->id)->update($request->all());

        return redirect('/agendamentos')->with('msg', 'Cliente atualizado com sucesso!');
    }


    public function destroy($id)
    {
        Agendamentos::findOrFail($id)->delete();

        return redirect('/agendamentos')->with('msg', 'Evento excluído com sucesso!');
    }
}
