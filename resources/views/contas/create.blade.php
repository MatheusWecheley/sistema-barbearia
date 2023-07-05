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

                        <form action="/sistema-barbearia/public/contas/new" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Conta</label>
                                <input type="text" class="form-control" id="conta" name="conta" aria-describedby="emailHelp" placeholder="Conta de Luz">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Data Vencimento:</label>
                                <input type="date" class="form-control" id="dataVencimento" name="dataVencimento">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">valor</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor" placeholder="10,00">
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
