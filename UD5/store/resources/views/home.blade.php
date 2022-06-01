@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrado') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido a RecordStore!') }}
                    <br>
                    <br>
                    <a href="records" class="btn btn-primary float-right">Ver Catálogo de Discos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
