
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cuidadores</title>
</head>
<body>
    <h1>Listado de Cuidadores</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuidadores as $cuidador)
                <tr>
                    <td>{{ $cuidador->id }}</td>
                    <td>{{ $cuidador->nombre }}</td>
                    <td>{{ $cuidador->apellidos }}</td>
                    <td>{{ $cuidador->telefono }}</td>
                    <td>{{ $cuidador->email }}</td>
                    <td>
                        <a href="{{ route('cuidadores.edit', $cuidador->id) }}">Editar</a>
                        <a href="{{ route('cuidadores.show', $cuidador->id) }}">Seleccionar</a>

                        <form action="{{ route('cuidadores.destroy', $cuidador->id) }}" method="POST" style="display:inline;"> 
                        
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
               
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

    <form action="{{ route('cuidadores.create') }}" style="display:inline;"> 
        
        <button type="submit">Añadir Nuevo</button>
    </form>

</body>
</html>