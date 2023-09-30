@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Tabela de Departamentos</div>
                @auth
                <ul>
                    <li>Vendas</li>
                    <li>Gerencia</li>
                    <li>Marketing</li>
                    <li>Telefonia</li>
                    <li>Recepção</li>
                </ul>
                @endauth
            </div>
            @guest
                <h1>Você não está logado.</h1>
            @endguest
        </div>
    </div>
</div>
@endsection
