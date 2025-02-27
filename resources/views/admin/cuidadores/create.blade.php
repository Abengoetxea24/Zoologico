<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir un cuidador</title>
</head>
<body>
    <form action="{{ route('admin.cuidadores.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono"><br><br>
        <label for="email">Mail:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad"><br><br>
        <input type="submit" value="Añadir">
      </form> 
</body>
</html>