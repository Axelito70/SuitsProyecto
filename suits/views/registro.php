<?php
    if(isset($_SESSION['usuario'])){
        header("location:inicio");
        exit();
    }
?>
<form class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-4 fondo">
            <div class="py-4">
                <h3 class="text-center">Registro</h3>
                <div class="imagen-circulo mx-auto d-block mb-3" style="background-image: url('./public/img/pagina.jpg'); width: 120px; height: 120px;"></div>
                <div class="form-floating mb-3">
                    <input class="form-control mb-3" name="nombre" id="nombre" type="text" placeholder="Nombre">
                    <label class="text-primary" for="nombre"><i class="fa-solid fa-user me-2"></i>Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido">
                    <label class="text-primary" for="apellido"><i class="fa-regular fa-address-book me-2"></i>Apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="usuario" id="usuario" type="text" placeholder="e-mail">
                    <label class="text-primary" for="usuario"><i class="fa-solid fa-envelope me-2"></i>Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                    <label class="text-primary" for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                </div>
                <button type="button" class="btn btn-primary w-100 mb-3" id="btn_registro"><i class="fa-solid fa-chalkboard-user me-2"></i>Registrar</button>
                <a href="login" class="btn btn-danger w-100"><i class="fa-solid fa-door-open me-2"></i>Inicio de sesion</a>
            </div>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./public/js/registro.js"></script>
