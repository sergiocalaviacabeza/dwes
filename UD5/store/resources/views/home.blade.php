@extends('layouts.app')

@section('content')
<style type="text/css">
    body {
        background-image: url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
        text-align: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><strong>¡¡¡BIENVENIDO A RECORDSTORE!!!</strong></h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4><strong>Tu tienda on-line</strong></h4>
                    <a href="records" class="btn btn-success float-right">Gestión - Ver Catálogo de Discos</a>
                    <br>
                    <br>
                    <a href="bands" class="btn btn-success float-right">Gestión Catálogo por Grupos</a>
                    <br>
                    <br>
                    <a href="users" class="btn btn-success float-right">Ver Clientes</a>
                    <br>
                    <br>
                    <h4>Contacto: <strong>info@recordstore.com</strong></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection