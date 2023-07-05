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
                                            <th scope="col">Conta</th>
                                            <th scope="col">Data Vencimento</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contas as $conta)
                                            <tr>
                                                <th scope="row">{{ $conta->id }}</th>
                                                <td>{{ $conta->conta }}</td>
                                                <td>{{ $conta->dataVencimento }}</td>
                                                <td>{{ $conta->Valor }}</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-primary">
                                                        <a href="/sistema-barbearia/public/contas/edit/{{ $conta->id }}"
                                                           class="link-light link-underline link-underline-opacity-0">Editar</a><i class="far fa-eye"></i></button>
                                                    <form action="/sistema-barbearia/public/contas/{{ $conta->id }}" method="POST" class="d-inline-block">
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
                                        <a href="/sistema-barbearia/public/contas/create"
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
