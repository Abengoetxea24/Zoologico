<div>
    <!-- Título del formulario -->
    <h1 class="text-2xl font-bold mb-4">
        {{ isset($animal) ? 'Editar Animal' : 'Añadir un Animal' }}
    </h1>

    <!-- Formulario -->
    <form onsubmit="manejarFormulario(event, '{{ isset($animal) ? route('admin.animales.update', $animal->id) : route('admin.animales.store') }}')"
          enctype="multipart/form-data">
        @csrf
        @if(isset($animal))
            @method('PUT')
        @endif

        <!-- Campo: Nombre -->
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ isset($animal) ? $animal->nombre : old('nombre') }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <!-- Campo: Especie -->
        <div class="mb-4">
            <label for="especie" class="block text-sm font-medium text-gray-700">Especie:</label>
            <input type="text" id="especie" name="especie" value="{{ isset($animal) ? $animal->especie : old('especie') }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <!-- Campo: Fecha de Nacimiento -->
        <div class="mb-4">
            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ isset($animal) ? $animal->fecha_nacimiento : old('fecha_nacimiento') }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <!-- Campo: Habitat ID -->
        <div class="mb-4">
            <label for="habitat_id" class="block text-sm font-medium text-gray-700">ID del Hábitat:</label>
            <input type="number" id="habitat_id" name="habitat_id" value="{{ isset($animal) ? $animal->habitat_id : old('habitat_id') }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <!-- Campo: Imagen -->
        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" {{ !isset($animal) ? 'required' : '' }}
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <!-- Campo: Descripción -->
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ isset($animal) ? $animal->descripcion : old('descripcion') }}</textarea>
        </div>

        <!-- Botón de Envío -->
        <div class="mb-4">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">
                {{ isset($animal) ? 'Actualizar' : 'Crear' }} Animal
            </button>
        </div>
    </form>
</div>