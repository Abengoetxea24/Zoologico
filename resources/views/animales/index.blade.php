
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Animales</title>
</head>
<body>
    <h1>Listado de Animales</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Fecha de Nacimiento</th>
                <th>Habitat ID</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animales as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->nombre }}</td>
                    <td>{{ $animal->especie }}</td>
                    <td>{{ $animal->fecha_nacimiento }}</td>
                    <td>{{ $animal->habitat_id }}</td>
                    <td>
                        <img src="{{ asset('ruta/a/imagenes/' . $animal->imagen) }}" alt="{{ $animal->nombre }}" width="100">
                    </td>
                    <td>{{ $animal->descripcion }}</td>
                    <td>
                        <a href="{{ route('animales.edit', $animal->id) }}">Editar</a>
                        <a href="{{ route('animales.show', $animal->id) }}">Seleccionar</a>
        
                        <form action="{{ route('animales.destroy', $animal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('animales.create') }}" style="display:inline;"> 
        
        <button type="submit">Añadir Nuevo</button>
    </form>

</body>
</html>