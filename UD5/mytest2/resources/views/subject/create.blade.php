<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Insertar Asignaturas</h1><br>
    <form action="/subjects" method="post">
        <div>
        @csrf
        <label>Estudios: </label><select name="study_id">
            @foreach($studies as $study)
        <option value="{{ $study->id }}">{{ $study->name }}</option>
        @endforeach
        </select>
        @error('study_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="id_subject">Código</label>
            <input type="text" name="id_subject">
            
        </div>

        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="abreviation">Abreviatura</label>
            <input type="time" name="abreviation">
        </div>
        
        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>