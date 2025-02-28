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
    <div class="bg-white flex w-full">
   
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

function eliminarAnimal(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    if (confirm('¿Estás seguro de que deseas eliminar este animal?')) {
        fetch(url, {
            method: 'POST', // Usar POST para simular DELETE
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ _method: 'DELETE' }) // Simular el método DELETE
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la respuesta del servidor');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Recargar la lista de animales después de eliminar
                cargarContenido('{{ route('admin.animales.index') }}');
            } else {
                alert(data.message || 'Error al eliminar el animal');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al eliminar el animal');
        });
    }
}


function manejarFormulario(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target); // Captura los datos del formulario

    fetch(url, {
        method: 'POST', // Siempre usa POST (el método PUT o DELETE se simula)
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        },
        body: formData // Envía los datos del formulario
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Recargar la lista de animales después de crear/actualizar
            cargarContenido('{{ route('admin.animales.index') }}');
        } else {
            alert(data.message || 'Error al procesar la solicitud');
        }
    })
    .catch(error => console.error('Error:', error));
}



function crearAnimal(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target);

    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Recargar la lista de animales después de crear
            cargarContenido('{{ route('admin.animales.index') }}');
        } else {
            alert('Error al crear el animal');
        }
    })
    .catch(error => console.error('Error:', error));
}
function actualizarAnimal(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target);

    fetch(url, {
        method: 'POST', // Usar POST para el método PUT
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Recargar la lista de animales después de actualizar
            cargarContenido('{{ route('admin.animales.index') }}');
        } else {
            alert('Error al actualizar el animal');
        }
    })
    .catch(error => console.error('Error:', error));
}
    </script>
</body>
</html>