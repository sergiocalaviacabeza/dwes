@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <h1>Usuarios</h1>

                <form action="/users" method="post">
                @csrf
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name"> 
                </div>

                <div>
                    <label for="style">Dirección</label>
                    <input type="text" name="address"> 
                </div>

                <div>
                    <label for="country">E-mail</label>
                    <input type="text" name="email"> 
                </div>

                <div>
                    <input type="submit" value="crear"> 
                </div>        
                </form>
                </div>
            </div>
    <a href="/users" class="btn btn-primary float-right">
                Volver
    </a>  
</div>
</div>
</div>
@endsection