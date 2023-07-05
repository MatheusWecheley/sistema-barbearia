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
                        <p>{{$produto->valor }}</p>
                        <form action="/sistema-barbearia/public/vendas/new" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cliente</label>
                                <input type="text" class="form-control" id="cliente" name="cliente" aria-describedby="emailHelp" placeholder="Corte de cabelo" value="{{$cliente->nome}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Servico</label>
                                <input type="text" class="form-control" id="servico" name="servico" aria-describedby="emailHelp" placeholder="corte de cabelo alisado" value="{{$servico->nome}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Produto</label>
                                <input type="text" class="form-control" id="produto" name="produto" placeholder="85" value="{{$produto->nome}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Valor Serviço</label>
                                <input  type="number" step="0.01" class="form-control" id="valorServico" name="valorServico" placeholder="10,00" value="{{$servico->valor}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Valor Produto</label>
                                <input  type="number" step="0.01" class="form-control" id="valorProduto" name="valorProduto" placeholder="10,00" value="{{$produto->valor}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Valor Total</label>
                                <input type="number" step="0.01" class="form-control" id="valorTotal" name="valorTotal" placeholder="10,00" value="{{$produto->valor + $servico->valor}}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
