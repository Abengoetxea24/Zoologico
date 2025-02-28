<div>
    <h1 class="text-2xl font-bold mb-4">Listado de Cuidadores</h1>

    <!-- Botón para añadir un nuevo cuidador -->
    <button onclick="cargarContenido('{{ route('admin.cuidadores.create') }}')" class="bg-green-600 text-white py-2 px-4 rounded-lg mb-4">
        Añadir Nuevo
    </button>

    <!-- Tabla de cuidadores -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Apellidos</th>
                <th class="py-2 px-4 border-b">Teléfono</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Especialidad</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuidadores as $cuidador)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $cuidador->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $cuidador->nombre }}</td>
                    <td class="py-2 px-4 border-b">{{ $cuidador->apellidos }}</td>
                    <td class="py-2 px-4 border-b">{{ $cuidador->telefono }}</td>
                    <td class="py-2 px-4 border-b">{{ $cuidador->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $cuidador->especialidad }}</td>
                    <td class="py-2 px-4 border-b">
                        <!-- Botón para editar -->
                        <button onclick="cargarContenido('{{ route('admin.cuidadores.edit', $cuidador->id) }}')" class="bg-blue-600 text-white py-1 px-2 rounded-lg mr-2">
                            Editar
                        </button>

                        <!-- Botón para seleccionar -->
                        <button onclick="cargarContenido('{{ route('admin.cuidadores.show', $cuidador->id) }}')" class="bg-yellow-600 text-white py-1 px-2 rounded-lg mr-2">
                            Seleccionar
                        </button>

                        <!-- Formulario para eliminar -->
                        <form onsubmit="eliminarCuidador(event, '{{ route('admin.cuidadores.destroy', $cuidador->id) }}')" class="inline">
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