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
    event.preventDefault(); // Evitar el envío tradicional del formulario

    if (confirm('¿Estás seguro de que deseas eliminar este animal?')) {
        fetch(url, {
            method: 'POST', // Usar POST para simular DELETE
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
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
                // Eliminar la fila de la tabla
                const animalId = url.split('/').pop(); // Obtener el ID del animal desde la URL
                const fila = document.getElementById(`animal-${animalId}`);
                if (fila) {
                    fila.remove(); // Eliminar la fila de la tabla
                }
                alert(data.message); // Mostrar mensaje de éxito
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



function cargarContenido(url) {
    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.getElementById('contenido-dinamico').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
}

function eliminarCuidador(event, url) {
    event.preventDefault(); // Evitar el envío tradicional del formulario

    if (confirm('¿Estás seguro de que deseas eliminar este cuidador?')) {
        fetch(url, {
            method: 'POST', // Usar POST para simular DELETE
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
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
                // Eliminar la fila de la tabla
                const cuidadorId = url.split('/').pop(); // Obtener el ID del cuidador desde la URL
                const fila = document.getElementById(`cuidador-${cuidadorId}`);
                if (fila) {
                    fila.remove(); // Eliminar la fila de la tabla
                }
                alert(data.message); // Mostrar mensaje de éxito
                // Recargar la lista de cuidadores
                cargarContenido('{{ route('admin.cuidadores.index') }}');
            } else {
                alert(data.message || 'Error al eliminar el cuidador');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al eliminar el cuidador');
        });
    }
}

function crearCuidador(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target);

    fetch(url, {
        method: 'POST',
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
            // Recargar la lista de cuidadores después de crear
            cargarContenido('{{ route('admin.cuidadores.index') }}');
        } else {
            alert(data.message || 'Error al crear el cuidador');
        }
    })
    .catch(error => console.error('Error:', error));
}

function actualizarCuidador(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target);

    fetch(url, {
        method: 'POST', // Usar POST para simular PUT
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
            // Recargar la lista de cuidadores después de actualizar
            cargarContenido('{{ route('admin.cuidadores.index') }}');
        } else {
            alert(data.message || 'Error al actualizar el cuidador');
        }
    })
    .catch(error => console.error('Error:', error));
}









function cargarContenido(url) {
    fetch(url)
        .then(response => response.text())
        .then(html => {
            document.getElementById('contenido-dinamico').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
}

function eliminarHabitat(event, url) {
    event.preventDefault(); // Evitar el envío tradicional del formulario

    if (confirm('¿Estás seguro de que deseas eliminar este hábitat?')) {
        fetch(url, {
            method: 'POST', // Usar POST para simular DELETE
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
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
                // Eliminar la fila de la tabla
                const habitatId = url.split('/').pop(); // Obtener el ID del hábitat desde la URL
                const fila = document.getElementById(`habitat-${habitatId}`);
                if (fila) {
                    fila.remove(); // Eliminar la fila de la tabla
                }
                alert(data.message); // Mostrar mensaje de éxito
                // Recargar la lista de hábitats
                cargarContenido('{{ route('admin.habitats.index') }}');
            } else {
                alert(data.message || 'Error al eliminar el hábitat');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al eliminar el hábitat');
        });
    }
}

function crearHabitat(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target);

    fetch(url, {
        method: 'POST',
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
            // Recargar la lista de hábitats después de crear
            cargarContenido('{{ route('admin.habitats.index') }}');
        } else {
            alert(data.message || 'Error al crear el hábitat');
        }
    })
    .catch(error => console.error('Error:', error));
}

function actualizarHabitat(event, url) {
    event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    const formData = new FormData(event.target);

    fetch(url, {
        method: 'POST', // Usar POST para simular PUT
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
            // Recargar la lista de hábitats después de actualizar
            cargarContenido('{{ route('admin.habitats.index') }}');
        } else {
            alert(data.message || 'Error al actualizar el hábitat');
        }
    })
    .catch(error => console.error('Error:', error));
}


    </script>
</body>
</html>