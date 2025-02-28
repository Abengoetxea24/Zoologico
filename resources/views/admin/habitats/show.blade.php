<div>
    <h1 class="text-2xl font-bold mb-4">Detalles del Hábitat</h1>
    <ul class="space-y-2">
        <li><strong class="text-gray-700">ID:</strong> {{ $habitat->id }}</li>
        <li><strong class="text-gray-700">Nombre:</strong> {{ $habitat->nombre }}</li>
        <li><strong class="text-gray-700">Temperatura:</strong> {{ $habitat->temperatura }}</li>
        <li><strong class="text-gray-700">Imagen:</strong> <img src="{{ asset('imagenes/' . $habitat->imagen) }}" alt="{{ $habitat->nombre }}" class="w-16 h-16 object-cover"></li>
        <li><strong class="text-gray-700">Humedad:</strong> {{ $habitat->humedad }}</li>
        <li><strong class="text-gray-700">Vegetación:</strong> {{ $habitat->vegetacion }}</li>
        <li><strong class="text-gray-700">Iluminación:</strong> {{ $habitat->iluminacion }}</li>
        <li><strong class="text-gray-700">Descripción:</strong> {{ $habitat->descripcion }}</li>
    </ul>

    <!-- Botón para volver al listado -->
    <button onclick="cargarContenido('{{ route('admin.habitats.index') }}')" class="bg-blue-600 text-white py-2 px-4 rounded-lg mt-4">
        Volver al Listado
    </button>
</div>