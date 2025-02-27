<div class="bg-green-800 text-white w-64 min-h-screen p-4">
    <h2 class="text-2xl font-bold mb-6">Administración</h2>
    <ul>
        <li class="mb-4">
            <button onclick="cargarContenido('{{ route('admin.animales.index') }}')" class="block w-full text-left py-2 px-4 hover:bg-green-700 rounded">
                Animales
            </button>
        </li>
        <li class="mb-4">
            <button onclick="cargarContenido('{{ route('admin.habitats.index') }}')" class="block w-full text-left py-2 px-4 hover:bg-green-700 rounded">
                Hábitats
            </button>
        </li>
        <li class="mb-4">
            <button onclick="cargarContenido('{{ route('admin.cuidadores.index') }}')" class="block w-full text-left py-2 px-4 hover:bg-green-700 rounded">
                Cuidadores
            </button>
        </li>
    </ul>
      </div>
    <div id="contenido-dinamico" class="p-10" >
     
    </div>
    
        
  
</div>