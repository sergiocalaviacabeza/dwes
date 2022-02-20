<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>

      <h1>Lista de usuarios</h1>

      <a href="/users/create" class="btn btn-primary float-right">
                Añadir Nuevo Usuario
    </a><br><br>

      <table class="table table-striped">
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Tipo</th>
        </tr>        
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email}} </td>
            <td> {{ $user->role->name }} </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
</body>
</html>

