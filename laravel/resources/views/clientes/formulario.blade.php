@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastre o novo contato
                <a class="float-right nav-link" href="{{url('clientes')}} ">Lista de Contatos</a></div>

                <div class="card-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-sucess">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/editar'))
                        {{ Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) }}
                    @else
                        {{ Form::open(['url' => 'clientes/salvar', 'method' => 'post']) }}
                    @endif


                    <div class="form-group">
                        {{ Form::label('text', 'Nome', ['class' => 'awesome']) }}
                        {{ Form::text('nome', NULL, ['class' => 'form-control', 'autofocus', 'placeholder' => 'nome'])}}
                    </div>

                    <div class="form-group">
                        {{ Form::label('text', 'telefone', ['class' => 'awesome']) }}
                        {{ Form::tel('telefone', NULL, ['class' => 'form-control', 'placeholder' => 'telefone'])}}
                    </div>

                    <div class="form-group">
                        {{ Form::label('text', 'email', ['class' => 'awesome']) }}
                        {{ Form::text('email', NULL, ['class' => 'form-control', 'placeholder' => 'email'])}}
                    </div> 

                     <div class="form-group">
                        {{ Form::submit('salvar', ['class' => 'btn btn-primary float-right']) }}
                    </div>                   

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
