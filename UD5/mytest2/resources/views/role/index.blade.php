<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>
<body>

      <h1>Lista de roles</h1>


      <table class="table table-striped">
        <tr>
          <th>ID</th>
          <th>TIPO</th>
        </tr>        
        @foreach ($roles as $rol)
          <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name}} </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
</body>
</html>

