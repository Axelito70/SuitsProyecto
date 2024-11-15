const mensaje_error = (msj) => {
    swal({
        title: "Error!",
        text: msj,
        icon: "warning",
        button: "Aceptar",
    });
}

const mensaje_exito = (msj) => {
    swal({
        title: "Correcto!",
        text: msj,
        icon: "success",
        button: "Aceptar",
    });
}

const validar_campos_sesion = () => {
    if ($("#usuario").val().trim() === "" || $("#password").val().trim() === "") {
        mensaje_error("Todos los campos deben estar llenos.");
        return false;
    }
    return true;
}

const iniciar_sesion = () => {
    if (!validar_campos_sesion()) return; // Detener si los campos están vacíos

    let data = new FormData();
    data.append("usuario", $("#usuario").val());
    data.append("password", $("#password").val());
    data.append("metodo", "iniciar_sesion");

    fetch("./app/controller/Login.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] == 1) {
            mensaje_exito(respuesta[1]);
            setTimeout(() => {
                window.location = "inicio";
            }, 1500); 
        } else {
            mensaje_error(respuesta[1]);
        }
    });
}

$("#btn_iniciar").on('click', () => {
    iniciar_sesion();
});