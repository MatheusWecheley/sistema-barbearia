@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2>Editando cliente: {{ $cliente->nome }}</h2>
                        <form action="/sistema-barbearia/public/clientes/update/{{ $cliente->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="joao" value="{{$cliente->nome}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="joao@joao.com" value="{{$cliente->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="(45) 9 9999-9999"value="{{$cliente->celular}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="123.456.789-12"value="{{$cliente->cpf}}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
