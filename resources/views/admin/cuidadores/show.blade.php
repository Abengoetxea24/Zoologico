<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Select</h1>
    <ul>
        <li>{{ $cuidador->id }} </li>
        <li>{{ $cuidador->nombre }} </li>
        <li>{{ $cuidador->apellidos }} </li>
        <li>{{ $cuidador->telefono }} </li>
        <li>{{ $cuidador->email }} </li>
        <li>{{ $cuidador->especialidad }} </li>
       
    </ul>
</body>
</html>