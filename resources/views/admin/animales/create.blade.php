<div>
    <h1 class="text-2xl font-bold mb-4">Añadir un Animal</h1>
    <form onsubmit="crearAnimal(event, '{{ route('admin.animales.store') }}')" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="especie" class="block text-sm font-medium text-gray-700">Especie:</label>
            <input type="text" id="especie" name="especie" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <select id="habitat_id" name="habitat_id" required
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    <option value="" disabled selected>Seleccione un hábitat</option>
    @foreach($habitats as $habitat)
        <option value="{{ $habitat->id }}">{{ $habitat->id }} - {{ $habitat->nombre }}</option>
    @endforeach 
</select>

        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">
                Añadir Animal
            </button>
        </div>
    </form>
</div>