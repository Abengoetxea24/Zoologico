<form action="{{ isset($animal) ? route('animales.update', $animal->id) : route('animales.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($animal))
        @method('PUT')
    @endif

    <!-- Campo: Nombre -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ isset($animal) ? $animal->nombre : old('nombre') }}" required>
    <br><br>

    <!-- Campo: Especie -->
    <label for="especie">Especie:</label>
    <input type="text" id="especie" name="especie" value="{{ isset($animal) ? $animal->especie : old('especie') }}" required>
    <br><br>

    <!-- Campo: Fecha de Nacimiento -->
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ isset($animal) ? $animal->fecha_nacimiento : old('fecha_nacimiento') }}" required>
    <br><br>

    <!-- Campo: Habitat ID -->
    <label for="habitat_id">ID del Hábitat:</label>
    <input type="number" id="habitat_id" name="habitat_id" value="{{ isset($animal) ? $animal->habitat_id : old('habitat_id') }}" required>
    <br><br>

    <!-- Campo: Imagen -->
    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen" accept="image/*" {{ !isset($animal) ? 'required' : '' }}>
    <br><br>

    <!-- Campo: Descripción -->
    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion" rows="4" cols="50" required>{{ isset($animal) ? $animal->descripcion : old('descripcion') }}</textarea>
    <br><br>

    <!-- Botón de Envío -->
    <button type="submit">{{ isset($animal) ? 'Actualizar' : 'Crear' }} Animal</button>
</form>