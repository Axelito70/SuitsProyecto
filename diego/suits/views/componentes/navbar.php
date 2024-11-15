<nav class="navbar navbar-expand-lg bg-black">
  <div class="container text-center">
    <a class="navbar-brand text-white" href="<?=url('inicio');?>"><i class="fa-solid fa-laptop-code me-2"></i>SUITS</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-nav" aria-current="page" href="<?=url('inicio');?>"><i class="fa-solid fa-house me-2"></i>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-nav" href="<?=url('inventario');?>"><i class="fa-solid fa-list-check me-2"></i>Inventario</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto d-block">
        <?php if(!isset($_SESSION['usuario'])): ?>
        <li class="nav-item">
          <a class="btn btn-nav" href="<?=url('login')?>">Iniciar Sesion</a>
        </li>
        <?php else: ?>
        <li class="nav-item dropdown">
          <a class="btn btn-nav dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user me-2"></i><?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="btn btn-light w-100" href="#"><i class="fa-regular fa-user me-2"></i>Mi Cuenta</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><button type="button" class="btn btn-danger w-100" id="btn_cerrar"><i class="fa-solid fa-power-off me-2"></i>Cerrar sesion</button></li>
          </ul>
        </li>
        <?php endif;?>
      </ul>
    </div>
  </div>
</nav>