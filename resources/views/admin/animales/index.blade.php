
<div>
    <h1 class="text-2xl font-bold mb-4">Listado de Animales</h1>

    <!-- Botón para añadir un nuevo animal -->
    <button onclick="cargarContenido('{{ route('admin.animales.create') }}')" class="bg-green-600 text-white py-2 px-4 rounded-lg mb-4">
        Añadir Nuevo
    </button>

    <!-- Tabla de animales -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Especie</th>
                <th class="py-2 px-4 border-b">Fecha de Nacimiento</th>
                <th class="py-2 px-4 border-b">Habitat ID</th>
                <th class="py-2 px-4 border-b">Imagen</th>
                <th class="py-2 px-4 border-b">Descripción</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animales as $animal)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $animal->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $animal->nombre }}</td>
                    <td class="py-2 px-4 border-b">{{ $animal->especie }}</td>
                    <td class="py-2 px-4 border-b">{{ $animal->fecha_nacimiento }}</td>
                    <td class="py-2 px-4 border-b">{{ $animal->habitat_id }}</td>
                    <td class="py-2 px-4 border-b">
                        <img src="{{ asset('imagenes/' . $animal->imagen) }}" alt="{{ $animal->nombre }}" class="w-20 h-20 object-cover">
                    </td>
                    <td class="py-2 px-4 border-b">{{ $animal->descripcion }}</td>
                    <td class="py-2 px-4 border-b">
                        <!-- Botón para editar -->
                        <button onclick="cargarContenido('{{ route('admin.animales.edit', $animal->id) }}')" class="bg-blue-600 text-white py-1 px-2 rounded-lg mr-2">
                            Editar
                        </button>

                        <!-- Botón para seleccionar -->
                        <button onclick="cargarContenido('{{ route('admin.animales.show', $animal->id) }}')" class="bg-yellow-600 text-white py-1 px-2 rounded-lg mr-2">
                            Seleccionar
                        </button>

                        <!-- Formulario para eliminar -->
                        <form onsubmit="eliminarAnimal(event, '{{ route('admin.animales.destroy', $animal->id) }}')" class="inline">
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