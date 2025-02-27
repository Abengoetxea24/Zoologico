
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Habitatas</title>
    <a href="{{ route('admin.animales.create') }}" class="bg-green-600 text-white py-2 px-4 rounded-lg mb-4 inline-block">

</head>
<body>
    <h1>Listado de Habitats</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Temperatura</th>
                <th>Humedad</th>
        
            </tr>
        </thead>
        <tbody>
            @foreach($habitats as $habitat)
                <tr>
                    <td>{{ $habitat->id }}</td>
                    <td>{{ $habitat->nombre }}</td>
                    <td>{{ $habitat->temperatura }}</td>
                    <td>{{ $habitat->humedad }}</td>
                    <td>
                        <a href="{{ route('admin.habitats.edit', $habitat->id) }}">Editar</a>
                        <a href="{{ route('admin.habitats.show', $habitat->id) }}">Seleccionar</a>

                        <form action="{{ route('admin.habitats.destroy', $habitat->id) }}" method="POST" style="display:inline;"> 
                        
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    <form action="{{ route('admin.habitats.create') }}" style="display:inline;"> 
        
        <button type="submit">Añadir Nuevo</button>
    </form>

</body>
</html>