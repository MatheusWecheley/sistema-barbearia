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
                                                <th scope="col">Nome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Celular</th>
                                                <th scope="col">CPF</th>
                                                <th scope="col">Ações</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($clientes as $cliente)
                                            <tr>
                                                <th scope="row">{{ $cliente->id }}</th>
                                                <td>{{ $cliente->nome }}</td>
                                                <td>{{ $cliente->email }}</td>
                                                <td>{{ $cliente->celular }}</td>
                                                <td>{{ $cliente->cpf }}</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-primary">
                                                        <a href="/sistema-barbearia/public/clientes/edit/{{ $cliente->id }}"
                                                           class="link-light link-underline link-underline-opacity-0">Editar</a><i class="far fa-eye"></i></button>
                                                    <form action="/sistema-barbearia/public/clientes/{{ $cliente->id }}" method="POST" class="d-inline-block">
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
                                            <a href="/sistema-barbearia/public/clientes/create"
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
