<div>
    <h1 class="text-2xl font-bold mb-4">Editar Hábitat</h1>
    <form onsubmit="actualizarHabitat(event, '{{ route('admin.habitats.update', $habitat->id) }}')">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $habitat->nombre }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="temperatura" class="block text-sm font-medium text-gray-700">Temperatura:</label>
            <input type="text" id="temperatura" name="temperatura" value="{{ $habitat->temperatura }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen:</label>
            <input type="file" id="imagen" name="imagen" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="humedad" class="block text-sm font-medium text-gray-700">Humedad:</label>
            <input type="text" id="humedad" name="humedad" value="{{ $habitat->humedad }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="vegetacion" class="block text-sm font-medium text-gray-700">Vegetacion:</label>
            <input type="text" id="vegetacion" name="vegetacion" value="{{ $habitat->vegetacion }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="iluminacion" class="block text-sm font-medium text-gray-700">Iluminacion:</label>
            <input type="text" id="iluminacion" name="iluminacion" value="{{ $habitat->iluminacion }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ $habitat->descripcion }}</textarea>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">
                Actualizar Hábitat
            </button>
        </div>
    </form>
</div>