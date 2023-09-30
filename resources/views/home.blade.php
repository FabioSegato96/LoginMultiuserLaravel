@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mt-5">Bem Vindo(a), {{ Auth::user()->name }}</h1>
            <div class="card">
                <div class="card-header">{{ __('Dashboard - Usuário') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Você está logado como Usuário.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
