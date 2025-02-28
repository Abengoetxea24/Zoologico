<div>
    <h1 class="text-2xl font-bold mb-4">Detalles del Cuidador</h1>
    <ul class="space-y-2">
        <li><strong class="text-gray-700">ID:</strong> {{ $cuidador->id }}</li>
        <li><strong class="text-gray-700">Nombre:</strong> {{ $cuidador->nombre }}</li>
        <li><strong class="text-gray-700">Apellidos:</strong> {{ $cuidador->apellidos }}</li>
        <li><strong class="text-gray-700">Teléfono:</strong> {{ $cuidador->telefono }}</li>
        <li><strong class="text-gray-700">Email:</strong> {{ $cuidador->email }}</li>
        <li><strong class="text-gray-700">Especialidad:</strong> {{ $cuidador->especialidad }}</li>
    </ul>

    <!-- Botón para volver al listado -->
    <button onclick="cargarContenido('{{ route('admin.cuidadores.index') }}')" class="bg-blue-600 text-white py-2 px-4 rounded-lg mt-4">
        Volver al Listado
    </button>
</div>