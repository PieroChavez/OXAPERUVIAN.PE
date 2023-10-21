@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p>{{ __('¡Hola') }}, {{ Auth::user()->name }}!</p>
                    <p>{{ __('¡Bienvenido! Te has autenticado correctamente.') }}</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Ver Perfil</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
