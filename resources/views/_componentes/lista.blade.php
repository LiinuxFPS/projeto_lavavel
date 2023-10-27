@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Lista de Clientes</div>

            <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($dados as $dados)
                    <tr>
                        <th scope="row">{{ $dados->id }}</th>
                        <td>{{ $dados->nome }}</td>
                        <td>{{ $dados->email }}</td>
                        <td>{{ $dados->telefone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection