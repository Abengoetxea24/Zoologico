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
          <div class="flex-1 flex justify-center items-center">
              <!-- Párrafo centrado -->
              <h1 class="text-5xl font-bold text-white text-center">Bienvenidos a SelvaNova</h1>
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
$animales = array (
    ["nombre" => "León", "descripcion" => "El 'rey de la selva'. Felino grande y poderoso.", "imagen" => "Leon.jpg"],
    ["nombre" => "Jirafa", "descripcion" => "El animal más alto. Largo cuello y manchas únicas.", "imagen" => "Jirafa.jpg"],
    ["nombre" => "Elefante", "descripcion" => "Mamífero terrestre más grande. Trompa larga y colmillos de marfil.", "imagen" => "Elefante.jpg"],
    ["nombre" => "Pingüino", "descripcion" => "Ave no voladora. Excelente nadador en climas fríos.", "imagen" => "Pinguino.jpg"],
    ["nombre" => "Tigre", "descripcion" => "Felino más grande. Cazador solitario con pelaje rayado.", "imagen" => "Tigre.jpg"],
    ["nombre" => "Cebra", "descripcion" => "Animal africano. Pelaje blanco y negro con rayas únicas.", "imagen" => "Cebra.jpeg"],
    ["nombre" => "Oso", "descripcion" => "Gran mamífero omnívoro. Fuerte y peludo, habita en bosques y montañas.", "imagen" => "Oso.jpeg"]
            );
?> 

      <div class="flex justify-center items-center h-screen" style="background-image: url('{{ asset('imagenes/fondo2.jpg') }}');">
            <div>
              <ul>
                <?php foreach ($animales as $animal) { ?>
                <li style="height: 100px width: 100px">
                  <a href="#" >
                    <img src="{{ asset('imagenes/' . $animal['imagen']) }}" alt="{{ $animal['nombre'] }}">  <h2><?php echo $animal['nombre'] ?></h2>
                    
                  </a>
                </li> <?php } ?>
                
              </ul>
            </div>

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
