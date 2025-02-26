<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Animal</title>
</head>
<body>
    <h1>Detalles del Animal</h1>
    <ul>
        <li><strong>ID:</strong> {{ $animal->id }}</li>
        <li><strong>Nombre:</strong> {{ $animal->nombre }}</li>
        <li><strong>Especie:</strong> {{ $animal->especie }}</li>
        <li><strong>Fecha de Nacimiento:</strong> {{ $animal->fecha_nacimiento }}</li>
        <li><strong>ID del Hábitat:</strong> {{ $animal->habitat_id }}</li>
        <li><strong>Imagen:</strong> 
            @if($animal->imagen)
                <img src="{{ asset('imagenes/' . $animal->imagen) }}" alt="{{ $animal->nombre }}" width="100">
            @else
                Sin imagen
            @endif
        </li>
        <li><strong>Descripción:</strong> {{ $animal->descripcion }}</li>
    </ul>
</body>
</html>