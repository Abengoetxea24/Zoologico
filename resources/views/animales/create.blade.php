<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir un Animal</title>
</head>
<body>
    <h1>Añadir un Animal</h1>
    <form action="{{ route('animales.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="especie">Especie:</label>
        <input type="text" id="especie" name="especie" required><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <label for="habitat_id">ID del Hábitat:</label>
        <input type="number" id="habitat_id" name="habitat_id" value="1" required><br><br>

        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Añadir Animal">
    </form>
</body>
</html>