<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-dark">Datos del Usuario</div>
        <div class="card-body text-dark">
            <p><strong>Nombre:</strong> <span id="usuario_nombre"></span></p>
            <p><strong>Apellido:</strong> <span id="usuario_apellido"></span></p>
            <p><strong>Usuario:</strong> <span id="usuario_usuario"></span></p>
            <button class="btn btn-primary" id="btn_editar">Editar</button>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Editar Datos del Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_editar">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                    <button type="button" class="btn btn-success" id="btn_guardar">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>