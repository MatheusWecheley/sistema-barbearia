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
                        <form action="/sistema-barbearia/public/vendas/new" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cliente:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cliente" id="cliente">
                                    <option selected disabled> Selecione o Cliente</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{$cliente->nome}}">{{$cliente->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Serviço:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="servico" id="servico">
                                    <option selected disabled> Selecione o Serviço</option>
                                    @foreach($servicos as $servico)
                                        <option value="{{$servico->nome}}">{{$servico->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Produtos:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="produto" id="produto">
                                    <option selected disabled> Selecione o Produto</option>
                                    @foreach($produtos as $produto)
                                        <option value="{{$produto->nome}}">{{$produto->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Valor Serviço</label>
                                <input  type="number" step="0.01" class="form-control" id="valorServico" name="valorServico" placeholder="10,00">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Valor Produto</label>
                                <input  type="number" step="0.01" class="form-control" id="valorProduto" name="valorProduto" placeholder="10,00">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Valor Total</label>
                                <input type="number" step="0.01" class="form-control" id="valorTotal" name="valorTotal" placeholder="10,00">
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
