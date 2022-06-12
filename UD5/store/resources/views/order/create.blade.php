@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        background-image: url("https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/1200/R/S/1869-RSD_image_1.jpg");
        font-family: 'Averta', sans-serif;
    }
</style>


<br><br>

<br><br>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        
                        <h1><strong>¡¡¡MUCHAS GRACIAS POR TU PEDIDO!!!</strong></h1>

                    </div>

                    <div class="card-body">
               
                        
                        <div class="card-header">{{ __('En breve nos pondremos en contacto para confirmarte el total y los discos. Cualquier duda escribe a: admin@recordstore / móvil 666707590') }}
                        

                    </div>
                </div>
            </div>
        </div>
        </div>        
</div>

<a href="/home" class="btn btn-success float-right">
Volver a INICIO - HOME</a>
<br><br>
<a href="/records" class="btn btn-success float-right">Volver a Catálogo Discos</a>
<br><br>
<a href="/bands" class="btn btn-success float-right">
    Volver a Grupos</a>



@endsection