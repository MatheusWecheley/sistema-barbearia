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

                        <form action="/sistema-barbearia/public/clientes/new" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="joao">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="joao@joao.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="(45) 9 9999-9999">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="123.456.789-12">
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
