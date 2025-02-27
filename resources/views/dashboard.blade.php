<x-app-layout>
    @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
  



    <title>SelvaNova</title>

    
    <div class="bg-cover bg-center h-screen w-full" style="background-image: url('{{ asset('imagenes/fondo.jpg') }}');">
      <!-- Contenedor flex principal -->
      <div class="h-full flex flex-col">
          <!-- Logo y título (se mantienen en su posición actual) -->
          <div class="p-6 text-white">
              <div class="flex items-center space-x-4">
                  <!-- Logo -->
                  <img 
                      src="{{ asset('imagenes/Logo.png') }}" 
                      alt="Logo" 
                      class="rounded-full w-16 h-16 object-cover"
                  >
                  <!-- Título -->
                  <h1 class="text-2xl font-bold">SelvaNova</h1>
              </div>
          </div>
  
          <!-- Contenedor flex para centrar el párrafo -->
          <div class="flex flex-col justify-center items-center h-full mt-[-100px]">
              <!-- Párrafo centrado -->
              <h1 class="text-[100px] font-bold text-center titulo">Bienvenidos a </h1>
              <h1 class="text-[100px] font-bold text-center mt-[-10px] titulo"> SelvaNova</h1>
              
          
          
              <button class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105 mt-4">
                <a href="#animales" class="no-underline">Conoce a nuestros Animales</a>
            </button>
          </div>
         

      </div>
  </div> 
        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5 mt-8 h-96">
          <!-- Imagen decorativa -->
          <div class="rounded-lg overflow-hidden shadow-lg">
              <img 
                  src="{{ asset('imagenes/secundaria.jpg') }}" 
                  alt="Entrada al zoo" 
                  class="object-cover h-full w-full"
              >
          </div>
      
          <!-- Texto informativo -->
          <div class="bg-white p-3 rounded-lg shadow-lg">
              <h2 class="text-xl font-bold text-green-800 mb-2">Descubre SelvaNova</h2>
              <p class="text-sm text-gray-600 mb-2">
                  En SelvaNova, nos dedicamos a la conservación y cuidado de la vida animal. Nuestro zoo es un refugio para más de 500 especies, desde los majestuosos leones hasta las curiosas jirafas. Aquí, podrás explorar hábitats únicos y aprender sobre la importancia de proteger nuestro planeta.
              </p>
              <p class="text-sm text-gray-600 mb-2">
                  Contamos con programas educativos, visitas guiadas y actividades interactivas para toda la familia. ¡Ven y vive una experiencia inolvidable en contacto con la naturaleza!
              </p>
              <button class="bg-green-700 hover:bg-green-600 text-white py-1 px-2 rounded text-sm">
                  Conoce más
              </button>
          </div>
      </section>
        
            
            
                <?php
$animales = [
    ['id' => 2, 'nombre' => 'León', 'habitat_id' => 1, 'especie' => 'Panthera leo', 'fecha_nacimiento' => '2018-05-15', 'descripcion' => "El 'rey de la selva'. Felino grande y poderoso.", 'imagen' => 'Leon.jpg'],
    ['id' => 3, 'nombre' => 'Jirafa', 'habitat_id' => 1, 'especie' => 'Giraffa camelopardalis', 'fecha_nacimiento' => '2019-03-22', 'descripcion' => 'El animal más alto. Largo cuello y manchas únicas.', 'imagen' => 'Jirafa.jpg'],
    ['id' => 4, 'nombre' => 'Elefante', 'habitat_id' => 1, 'especie' => 'Loxodonta africana', 'fecha_nacimiento' => '2015-07-10', 'descripcion' => 'Mamífero terrestre más grande. Trompa larga y colmillos de marfil.', 'imagen' => 'Elefante.jpg'],
    ['id' => 5, 'nombre' => 'Pingüino', 'habitat_id' => 1, 'especie' => 'Aptenodytes forsteri', 'fecha_nacimiento' => '2020-11-30', 'descripcion' => 'Ave no voladora. Excelente nadador en climas fríos.', 'imagen' => 'Pinguino.jpg'],
    ['id' => 6, 'nombre' => 'Tigre', 'habitat_id' => 1, 'especie' => 'Panthera tigris', 'fecha_nacimiento' => '2017-09-05', 'descripcion' => 'Felino más grande. Cazador solitario con pelaje rayado.', 'imagen' => 'Tigre.jpg'],
    ['id' => 7, 'nombre' => 'Cebra', 'habitat_id' => 1, 'especie' => 'Equus quagga', 'fecha_nacimiento' => '2016-12-18', 'descripcion' => 'Animal africano. Pelaje blanco y negro con rayas únicas.', 'imagen' => 'Cebra.jpeg'],
    ['id' => 8, 'nombre' => 'Oso', 'habitat_id' => 1, 'especie' => 'Ursus arctos', 'fecha_nacimiento' => '2014-04-25', 'descripcion' => 'Gran mamífero omnívoro. Fuerte y peludo, habita en bosques y montañas.', 'imagen' => 'Oso.jpeg'],
    ['id' => 38, 'nombre' => 'Suricato', 'habitat_id' => 1, 'especie' => 'Suricata suricatta', 'fecha_nacimiento' => '2024-11-07', 'descripcion' => 'Pequeño mamífero carnívoro de la familia de las mangostas. Vive en grupos sociales en las llanuras y desiertos del sur de África. Conocido por su comportamiento vigilante y postura erguida.', 'imagen' => 'Suricato.jpeg'],
    ['id' => 39, 'nombre' => 'Lémur', 'habitat_id' => 1, 'especie' => 'Lemur catta', 'fecha_nacimiento' => '2024-12-10', 'descripcion' => 'Primate endémico de Madagascar. Conocido por su cola anillada y su comportamiento social. Habita en bosques y zonas arbóreas.', 'imagen' => 'Lemur.jpeg']
];
           
?> 

<div id="animales" class="flex justify-center items-center h-auto p-4" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}');">
    
        <ul class="flex flex-wrap justify-center gap-4">
            <?php foreach ($animales as $animal) { ?>
            <li class="w-80 h-80 flex flex-col items-center justify-between transform transition duration-150 hover:scale-105 hover:z-10">
                <a href="#" class="block bg-black text-white p-4 shadow-lg transform hover:scale-110 rounded-md">
                    <img src="{{ asset('imagenes/' . $animal['imagen']) }}" alt="{{ $animal['nombre'] }}" class="w-full h-40 object-cover rounded-md mb-4">
                    <h2 class="text-center text-xl font-semibold">{{ $animal['nombre'] }}</h2>
                </a>
            </li> 
            <?php } ?>
        </ul>
    
</div>
        
     





<div class="flex justify-between items-center p-4">
    <!-- Contenedor para las 3 primeras imágenes (izquierda) -->
    <div class="flex space-x-4">
        <img 
            src="{{ asset('imagenes/Instagram.jpeg') }}" 
            alt="Instagram" 
            class="w-12 h-12 rounded-full object-cover"
        >
        <img 
            src="{{ asset('imagenes/x.jpeg') }}" 
            alt="X" 
            class="w-12 h-12 rounded-full object-cover"
        >
        <img 
            src="{{ asset('imagenes/Redit.png') }}" 
            alt="Redit" 
            class="w-12 h-12 rounded-full object-cover"
        >
    </div>

    <!-- Contenedor para la cuarta imagen y el texto (derecha) -->
    <div class="flex items-center space-x-4">
        <img 
            src="{{ asset('imagenes/Mail.png') }}" 
            alt="Mail" 
            class="w-12 h-12 rounded-full object-cover"
        >
        <span class="text-white">info@selvanova.com</span>
    </div>
</div>

</x-app-layout>
