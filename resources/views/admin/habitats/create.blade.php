<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir un Habitat</title>
</head>
<body>
    <form action="{{ route('admin.habitats.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="temperatura">Temperatura</label>
        <input type="text" name="temperatura" id="temperatura">

        <label for="humedad">Humedad</label>
        <input type="text" name="humedad" id="humedad">
        
    
        <input type="submit" value="Añadir">
      </form> 
</body>
</html>