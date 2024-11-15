// Función para cargar los datos del usuario
const cargar_datos_usuario = () => {
    let data = new FormData();
    data.append("metodo", "obtener_usuario");
    
    fetch("./app/controller/Datosusuarios.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta.error) {
            swal("Error", respuesta.error, "error");
            return;
        }
        $("#usuario_nombre").text(respuesta.nombre);
        $("#usuario_apellido").text(respuesta.apellido);
        $("#usuario_usuario").text(respuesta.usuario);
    });
}

// Función para precargar los datos en el modal de edición
const precargar_datos_usuario = () => {
    const nombre = $("#usuario_nombre").text();
    const apellido = $("#usuario_apellido").text();
    
    $("#nombre").val(nombre);
    $("#apellido").val(apellido);
    $('#modalEditar').modal('show');
}

// Función para actualizar los datos del usuario
const actualizar_usuario = () => {
    let data = new FormData();
    data.append("metodo", "actualizar_usuario");
    data.append("nombre", $("#nombre").val().trim());
    data.append("apellido", $("#apellido").val().trim());

    if ($("#nombre").val().trim() === "" || $("#apellido").val().trim() === "") {
        swal("Error", "Todos los campos deben estar completos.", "warning");
        return;
    }

    fetch("./app/controller/Datosusuarios.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] === 1) {
            swal("Actualizado", respuesta[1], "success");
            cargar_datos_usuario();  // Recargar los datos después de actualizar
            $('#modalEditar').modal('hide');
        } else {
            swal("Error", respuesta[1], "error");
        }
    });
}

// Inicializar datos al cargar la página
document.addEventListener("DOMContentLoaded", () => {
    cargar_datos_usuario();
});

// Botón para editar los datos del usuario
$("#btn_editar").on('click', function() {
    precargar_datos_usuario();
});

// Botón para guardar los cambios del usuario
$("#btn_guardar").on('click', function() {
    actualizar_usuario();
});