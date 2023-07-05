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

                        <form action="/sistema-barbearia/public/produtos/update/{{$produto->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Gel" value="{{$produto->nome}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp" placeholder="Gel para barbear" value="{{$produto->descricao}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">quantidade</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="85" value="{{$produto->quantidade}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">valor</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor" placeholder="10,00" value="{{$produto->valor}}">
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
