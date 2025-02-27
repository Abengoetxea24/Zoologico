<form action="{{ route ('habitats.update', $habitat->id)}}" method="post">
    @csrf
    @method('PUT')

    <lablel for = "nombre">Nombre:</lablel>
    <input type="text" name="nombre" value="{{ old('nombre', $habitat->nombre)}}">

    <label for="temperatura">Temperatura:</label>
    <input type="text" name="temperatura" value="{{ old('temperatura', $habitat->temperatura)}}">

    <label for="humedad">Humedad:</label>
    <input type="text" name="humedad" value="{{ old('humedad', $habitat->humedad)}}">

    <button type="submit">Actualizar</button>
</form>