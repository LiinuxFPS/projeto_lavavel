@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <a href="{{ route('app.cadastrar')}}" 
                        class="btn btn-outline-primary btn-lg">
                            Cadastrar Clientes
                    </a>
                    
                    <a href="{{ route('app.listar')}}"
                        class="btn btn-outline-primary btn-lg">
                            Listar Clientes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
