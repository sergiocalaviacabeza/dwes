@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        background-image: url("https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/1200/R/S/1869-RSD_image_1.jpg");
        font-family: 'Averta', sans-serif;
        text-align: center;
    }
</style>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1><strong>¡¡¡MUCHAS GRACIAS POR TU PEDIDO!!!</strong></h1>
                </div>

                <div class="card-body">
                    <h5>En breve nos pondremos en contacto para confirmarte el total del pedido y que los discos.</h5>
                    <h5>Cualquier duda escribe a: admin@recordstore / móvil 666707590.</h5>
                </div>
                <a href="/home" class="btn btn-success float-right">
                    Volver a INICIO - HOME</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection