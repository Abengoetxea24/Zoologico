<form action="{{ route ('admin.cuidadores.update', $cuidador->id)}}" method="post">
    @csrf
    @method('PUT')

    <lablel for = "nombre">Nombre:</lablel>
    <input type="text" name="nombre" value="{{ old('nombre', $cuidador->nombre)}}">

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" value="{{ old('apellidos', $cuidador->apellidos)}}">

    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" value="{{ old('telefono', $cuidador->telefono)}}">

    <label for="email">Email:</label>
    <input type="text" name="email" value="{{ old('email', $cuidador->email)}}">

    <label for="especialidad">Especialidad:</label>
    <input type="text" name="especialidad" value="{{ old('cuidador', $cuidador->especialidad)}}">

    <button type="submit">Actualizar</button>
</form>