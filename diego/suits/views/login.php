<?php
    if(isset($_SESSION['usuario'])){
        header("location:inicio");
        exit();
    }
?>
<form id="frm_login" class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-4 fondo">
            <div class="py-4">
                <h3 class="text-center" style="color: rgb(255, 0, 0);">Login</h3>
                <div class="imagen-circulo mx-auto d-block mb-3" style="background-image: url('./public/img/pagina.jpg'); width: 120px; height: 120px;"></div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="usuario" name="usuario" type="text"
                        placeholder="e-mail">
                    <label class="text-primary" for="usuario"><i class="fa-solid fa-envelope me-2"></i>e-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="Password">
                    <label class="text-primary" for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                </div>
                <button class="btn btn-primary w-100 mb-3" type="button" id="btn_iniciar"><i
                        class="fa-solid fa-door-open me-2"></i>Iniciar sesión</button>
                <a href="registro" class="btn btn-danger w-100 mb-3"><i
                        class="fa-solid fa-chalkboard-user me-2"></i>Registro</a>
            </div>
        </div>
    </div>
</form>
<script src="./public/js/login.js"></script>
