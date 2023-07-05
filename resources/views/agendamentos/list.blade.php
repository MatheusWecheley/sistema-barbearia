@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
                            <div class="row">
                                <div class="col-16">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Servico</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($agendamentos as $agendamento)
                                            <tr>
                                                <th scope="row">{{ $agendamento->id }}</th>
                                                <td>{{ $agendamento->cliente}}</td>
                                                <td>{{ $agendamento->servico }}</td>
                                                <td>{{ $agendamento->produto }}</td>
                                                <td>{{ $agendamento->data }}</td>
                                                <td>{{ $agendamento->hora }}</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-primary" >
                                                        <a href="/sistema-barbearia/public/vendas/edit/{{ $agendamento->idCliente }}/{{ $agendamento->idServico }}/{{ $agendamento->idProduto }}"
                                                           class="link-light link-underline link-underline-opacity-0">Venda</a><i class="far fa-eye"></i></button>
                                                    <form action="/sistema-barbearia/public/agendamentos/{{ $agendamento->id }}" method="POST" class="d-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Excluir
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <button type="button"
                                            class="btn btn-primary">
                                        <a href="/sistema-barbearia/public/agendamentos/create"
                                           class="link-light link-underline link-underline-opacity-0">Novo</a><i class="far fa-eye"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
