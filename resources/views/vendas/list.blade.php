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
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Servico</th>
                                            <th scope="col">Produto</th>
                                            <th scope="col">Valor Produto</th>
                                            <th scope="col">Valor Servico</th>
                                            <th scope="col">Valor Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($vendas as $venda)
                                            <tr>
                                                <th scope="row">{{ $venda->id }}</th>
                                                <td>{{ $venda->cliente }}</td>
                                                <td>{{ $venda->servico }}</td>
                                                <td>{{ $venda->produto }}</td>
                                                <td>{{ $venda->valorProduto }}</td>
                                                <td>{{ $venda->valorServico }}</td>
                                                <td>{{ $venda->valorTotal }}</td>
                                                <td>
                                                    <form action="/sistema-barbearia/public/vendas/{{ $venda->id }}" method="POST" class="d-inline-block">
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
                                        <a href="/sistema-barbearia/public/vendas/create"
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
