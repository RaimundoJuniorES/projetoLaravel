@extends('layouts.app')

<?php
    session_start();

    $_SESSION["idUser"]=null;

?>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Você esta logado! Agora você pode salvar todos os seus contatos e acessar quando quizer.
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
