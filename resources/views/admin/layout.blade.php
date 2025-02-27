<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body >
    <!-- Sidebar -->
    <div class="bg-gray-800 flex w-full">
   
 @include('admin.sidebar')
    <!-- Contenido Principal -->


</div>

    <!-- Script para cargar contenido dinámico -->
    <script>
        function cargarContenido(url) {
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('contenido-dinamico').innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>