@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div class="card">
                <div class="card-header">Lista de Contatos
                <a class="float-right nav-link"  href="{{url('clientes/novo')}}">Novo</a></div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table">
                    
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Opções</th>
                        
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>
                                        <a href="clientes/{{ $cliente->id }}/editar" class="btn btn-primary">Editar</a>
                                        {{ Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline']) }}
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach 
                        <tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
