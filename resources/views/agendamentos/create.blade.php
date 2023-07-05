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

                        <form action="/sistema-barbearia/public/agendamentos/new" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cliente:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cliente" id="cliente">
                                    <option selected disabled> Selecione o Cliente</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Serviço:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="servico" id="servico">
                                    <option selected disabled> Selecione o Serviço</option>
                                    @foreach($servicos as $servico)
                                        <option value="{{$servico->id}}">{{$servico->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Produtos:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="produto" id="produto">
                                    <option selected disabled> Selecione o Produto(Não Obrigatório)</option>
                                    @foreach($produtos as $produto)
                                        <option value="{{$produto->id}}">{{$produto->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Data:</label>
                                <input type="date" class="form-control" id="data" name="data">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hora:</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="hora" id="hora">
                                    <option selected disabled> Selecione a Hora</option>
                                        <option value="13:00" name="hora" id="hora">13:00</option>
                                        <option value="13:30" name="hora" id="hora">13:30</option>
                                        <option value="14:00" name="hora" id="hora">14:00</option>
                                        <option value="14:30" name="hora" id="hora">14:30</option>
                                        <option value="15:00" name="hora" id="hora">15:00</option>
                                        <option value="15:30" name="hora" id="hora">15:30</option>
                                        <option value="16:00" name="hora" id="hora">16:00</option>
                                        <option value="16:30" name="hora" id="hora">16:30</option>
                                        <option value="17:00" name="hora" id="hora">17:00</option>
                                        <option value="17:30" name="hora" id="hora">17:30</option>
                                        <option value="18:00" name="hora" id="hora">18:00</option>
                                        <option value="18:30" name="hora" id="hora">18:30</option>
                                        <option value="19:00" name="hora" id="hora">19:00</option>
                                </select>
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
