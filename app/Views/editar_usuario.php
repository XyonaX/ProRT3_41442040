<main class="min-vh-100 bg-dark">
    <div class="container mt-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-center text-white">Editar Usuario</h1>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <?= form_open('/usuarios/actualizar/' . $usuario['usuario_id'],['class' => 'd-flex flex-column justify-content-center w-50']) ?>
            <div class="form-group mb-2">
                <label class="text-warning" for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?= set_value('nombre', $usuario['usuario_nombre']) ?>" required>
            </div>
            <div class="form-group mb-2">
                <label class="text-warning" for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" value="<?= set_value('apellido', $usuario['usuario_apellido']) ?>" required>
            </div>
            <div class="form-group mb-2">
                <label class="text-warning" for="email">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" value="<?= set_value('email', $usuario['usuario_email']) ?>" required>
            </div>
            <div class="form-group mb-2">
                <label class="text-warning" for="estado">Estado</label>
                <select name="estado" class="form-control">
                    <option value="1" <?= $usuario['usuario_estado'] == 1 ? 'selected' : '' ?>>Activo</option>
                    <option value="0" <?= $usuario['usuario_estado'] == 0 ? 'selected' : '' ?>>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Actualizar Usuario</button>
        <?= form_close() ?>
    </div>
</main>