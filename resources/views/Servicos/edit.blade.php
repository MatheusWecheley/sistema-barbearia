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

                        <form action="/sistema-barbearia/public/servicos/update/{{$servico->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Corte de cabelo" value="{{$servico->nome}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp" placeholder="corte de cabelo alisado" value="{{$servico->descricao}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">quantidade</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="85" value="{{$servico->quantidade}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">valor</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor" placeholder="10,00" value="{{$servico->valor}}">
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
