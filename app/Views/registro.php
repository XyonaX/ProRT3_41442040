<section class="pagina-registro min-vh-100 d-flex justify-content-center align-items-center flex-column bg-dark">
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <h2 class="text-center mb-4 text-white mb-2">Registro</h2>
        <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-success mt-3" role="alert">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>
        <!-- <form class="d-flex flex-column justify-content-center w-25"> -->
        <?= form_open('registro', ['class' => 'd-flex flex-column justify-content-center w-25']) ?>
            <div class="form-group mb-2">
                <label for="nombre" class="text-white mb-2">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
                <?php if (isset($validation['nombre'])) : ?>
                    <div class="alert alert-danger mt-1 h-25" role="alert"><?= esc($validation['nombre']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mb-2">
                <label for="apellido" class="text-white mb-2">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu nombre">
                <?php if (isset($validation['apellido'])) : ?>
                    <div class="alert alert-danger mt-1" role="alert"><?= esc($validation['apellido']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="text-white mb-2 ">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico">
                <?php if (isset($validation['email'])) : ?>
                    <div class="alert alert-danger mt-1" role="alert"><?= esc($validation['email']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mb-2">
                <label for="password" class="text-white mb-2">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
                <?php if (isset($validation['password'])) : ?>
                    <div class="alert alert-danger mt-1" role="alert"><?= esc($validation['password']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group mb-2">
                <label for="confirmPassword" class="text-white mb-2 ">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirmPassword" name="re-password" placeholder="Confirma tu contraseña">
                <?php if (isset($validation['re-password'])) : ?>
                    <div class="alert alert-danger mt-1" role="alert"><?= esc($validation['re-password']) ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-outline-success btn-block mb-2">Registrarse</button>
            <span class="text-success">¿Ya posees una cuenta? <a href="login" class="text-success link-underline-success link-underline-opacity-50">Incia Sesion</a></span>
        <?= form_close() ?>
    </div>
</section class="mb-3">