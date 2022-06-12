@extends('layouts.app')

@section('content')
<style type="text/css">   
        body {
        background-image:  url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
        }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDO A RECORDSTORE !!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('TU TIENDA ONLINE') }}
                    <br>
                    <br>
                    <a href="records" class="btn btn-success float-right">Ver Catálogo de Discos - Gestión</a>
                    <br>
                    <br>
                    <a href="bands" class="btn btn-success float-right">Acceso Gestión Catálogo - Grupos</a>
                    <br>
                    <br>
                    <a href="users" class="btn btn-success float-right">Ver Clientes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
