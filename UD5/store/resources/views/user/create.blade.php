@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        background-image: url("https://www.poblenouurbandistrict.com/wp-content/uploads/2019/04/record-store-day-.jpg");
        font-family: 'Averta', sans-serif;
    }
</style>

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
                            <label for="address">Dirección</label>
                            <input type="text" name="address">
                        </div>
                        <div>
                            <label for="city">Ciudad</label>
                            <input type="text" name="city">
                        </div>
                        <div>
                            <label for="email">E-mail</label>
                            <input type="text" name="email">
                        </div>

                        <div>
                            <label for="role">Rol</label>
                            <input type="text" name="role">
                        </div>

                        <div>
                            <input type="submit" value="crear">
                        </div>
                    </form>
                </div>
            </div>
            <a href="/users" class="btn btn-primary float-right">
                Volver a Usuarios
            </a>
        </div>
    </div>
</div>
@endsection