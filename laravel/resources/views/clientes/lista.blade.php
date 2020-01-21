@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-lg-12">
            <div class="card">
                <div class="card-header">
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm nav-link font-weight-bold">
                            Lista de Contatos
                        </div>
                        <div class="col-sm">
                            <a class="float-right nav-link"  href="{{url('clientes/novo')}}">Novo</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class="table table-hover">
                    
                        <th class="table-secondary">Nome</th>
                        <th class="table-secondary">Telefone</th>
                        <th class="table-secondary">Email</th>
                        <th class="table-secondary">Opções</th>
                        
                        
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                @if( $cliente->iduser == auth()->id())
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>
                                        <a href="clientes/{{ $cliente->id }}/editar" class="btn btn-primary">Editar</a>
                                        {{ Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline']) }}
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                        {{ Form::close() }}
                                    </td>
                                @endif
                                </tr>
                            @endforeach 
                        <tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
