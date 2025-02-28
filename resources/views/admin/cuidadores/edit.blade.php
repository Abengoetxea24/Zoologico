<div>
    <h1 class="text-2xl font-bold mb-4">Editar Cuidador</h1>
    <form onsubmit="actualizarCuidador(event, '{{ route('admin.cuidadores.update', $cuidador->id) }}')">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $cuidador->nombre }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="apellidos" class="block text-sm font-medium text-gray-700">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" value="{{ $cuidador->apellidos }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ $cuidador->telefono }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" value="{{ $cuidador->email }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <label for="especialidad" class="block text-sm font-medium text-gray-700">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" value="{{ $cuidador->especialidad }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">
                Actualizar Cuidador
            </button>
        </div>
    </form>
</div>