<div>
    <h1 class="text-2xl font-bold mb-4">Detalles del Animal</h1>
    <ul class="space-y-2">
        <li><strong class="text-gray-700">ID:</strong> {{ $animal->id }}</li>
        <li><strong class="text-gray-700">Nombre:</strong> {{ $animal->nombre }}</li>
        <li><strong class="text-gray-700">Especie:</strong> {{ $animal->especie }}</li>
        <li><strong class="text-gray-700">Fecha de Nacimiento:</strong> {{ $animal->fecha_nacimiento }}</li>
        <li><strong class="text-gray-700">Hábitat:</strong> 
            @if($animal->habitat)
                {{ $animal->habitat->nombre }} (ID: {{ $animal->habitat_id }})
            @else
                {{ $animal->habitat_id }} (Hábitat no encontrado)
            @endif
        </li>
        <li>
            <strong class="text-gray-700">Imagen:</strong>
            @if($animal->imagen)
                <img src="{{ asset('storage/' . $animal->imagen) }}" alt="{{ $animal->nombre }}" class="w-20 h-20 object-cover mt-2">
            @else
                <span class="text-gray-500">Sin imagen</span>
            @endif
        </li>
        <li><strong class="text-gray-700">Descripción:</strong> {{ $animal->descripcion }}</li>
        
        <!-- Sección de Cuidadores -->
        <li>
            <strong class="text-gray-700">Cuidadores Asignados:</strong>
            @if($animal->cuidadores->count() > 0)
                <ul class="mt-2 ml-4 space-y-1">
                    @foreach($animal->cuidadores as $cuidador)
                        <li class="flex items-center">
                            <span class="text-gray-800">• {{ $cuidador->nombre }}</span>
                            @if($cuidador->especialidad)
                                <span class="ml-2 text-sm text-gray-500">({{ $cuidador->especialidad }})</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <span class="text-gray-500 ml-2">Este animal no tiene cuidadores asignados</span>
            @endif
        </li>
    </ul>

    <!-- Botón para volver al listado -->
    <button onclick="cargarContenido('{{ route('admin.animales.index') }}')" class="bg-blue-600 text-white py-2 px-4 rounded-lg mt-4">
        Volver al Listado
    </button>
</div>