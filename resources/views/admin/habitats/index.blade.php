<div>
    <h1 class="text-2xl font-bold mb-4">Listado de Hábitats</h1>

    <!-- Botón para añadir un nuevo hábitat -->
    <button onclick="cargarContenido('{{ route('admin.habitats.create') }}')" class="bg-green-600 text-white py-2 px-4 rounded-lg mb-4">
        Añadir Nuevo
    </button>

    <!-- Tabla de hábitats -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Temperatura</th>
                <th class="py-2 px-4 border-b">Imagen</th>
                <th class="py-2 px-4 border-b">Humedad</th>
                <th class="py-2 px-4 border-b">Vegetación</th>
                <th class="py-2 px-4 border-b">Iluminación</th>
                <th class="py-2 px-4 border-b">Descripción</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($habitats as $habitat)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $habitat->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $habitat->nombre }}</td>
                    <td class="py-2 px-4 border-b">{{ $habitat->temperatura }}</td>
                    <td class="py-2 px-4 border-b">
                        <img src="{{ asset('imagenes/' . $habitat->imagen) }}" alt="{{ $habitat->nombre }}" class="w-20 h-20 object-cover">
                    </td>
                    <td class="py-2 px-4 border-b">{{ $habitat->humedad }}</td>
                    <td class="py-2 px-4 border-b">{{ $habitat->vegetacion }}</td>
                    <td class="py-2 px-4 border-b">{{ $habitat->iluminacion }}</td>
                    <td class="py-2 px-4 border-b">{{ $habitat->descripcion }}</td>
                    <td class="py-2 px-4 border-b">
                        <!-- Botón para editar -->
                        <button onclick="cargarContenido('{{ route('admin.habitats.edit', $habitat->id) }}')" class="bg-blue-600 text-white py-1 px-2 rounded-lg mr-2">
                            Editar
                        </button>

                        <!-- Botón para seleccionar -->
                        <button onclick="cargarContenido('{{ route('admin.habitats.show', $habitat->id) }}')" class="bg-yellow-600 text-white py-1 px-2 rounded-lg mr-2">
                            Seleccionar
                        </button>

                        <!-- Formulario para eliminar -->
                        <form onsubmit="eliminarHabitat(event, '{{ route('admin.habitats.destroy', $habitat->id) }}')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white py-1 px-2 rounded-lg">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>