
const iniciar_registro = () => {
    
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let usuario = $("#usuario").val();
    let password = $("#password").val();

    if (!nombre || !apellido || !usuario || !password) {
        Swal.fire({
            icon: 'warning',
            title: 'Campos incompletos',
            text: 'Por favor, complete todos los campos necesarios.',
        });
        return; 
    }


    if (!usuario.includes("@")) {
        Swal.fire({
            icon: 'warning',
            title: 'Correo inválido',
            text: 'El correo electrónico debe contener el carácter "@"',
        });
        return;
    }

    const uppercasePattern = /[A-Z]/;
    if (password.length < 8 || !uppercasePattern.test(password)) {
        Swal.fire({
            icon: 'warning',
            title: 'Contraseña inválida',
            text: 'La contraseña debe tener al menos 8 caracteres y contener al menos una letra en mayúscula.',
        });
        return;
    }

    let data = new FormData();
    data.append("nombre", nombre);
    data.append("apellido", apellido);
    data.append("usuario", usuario);
    data.append("password", password);
    data.append("metodo", "iniciar_registro");

    fetch("./app/controller/Registro.php", {
        method: "POST",
        body: data
    }).then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] == 1) {
            Swal.fire({
                icon: 'success',
                title: 'Registro exitoso',
                text: respuesta[1],
            }).then(() => {
                window.location = "login";
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: respuesta[1],
            });
        }
    });
}

$("#btn_registro").on('click', iniciar_registro);
