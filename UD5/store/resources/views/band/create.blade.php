@extends('layouts.app')

@section('content')

<style type="text/css">   
        body {background-image:  url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
        }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card-body">
                <div class="col-md-8">
                <h3>Grupo</h3>

                <form action="/bands" method="post">
                @csrf
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name"> 
                </div>
                <br>
                <div>
                    <label for="style">Estilo</label>
                    <input type="text" name="style"> 
                </div>
                <br>
                <div>
                    <label for="country">País</label>
                    <input type="text" name="country"> 
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-success float-right" value="INSERTAR"> 
                </div>        
                </form>
                </div>
            </div>
    <a href="/bands" class="btn btn-primary float-right">
                Volver a Grupos
    </a>  
</div>
</div>
</div>
@endsection