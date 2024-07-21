<section class="pagina-login min-vh-100 d-flex justify-content-center align-items-center flex-column bg-dark">
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <h2 class="text-center text-white">Login</h2>
        <?php if (session()->getFlashdata('err')) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= session()->getFlashdata('err') ?>
            </div>
        <?php endif; ?>
        <?= form_open('login', ['class' => 'd-flex flex-column justify-content-center w-25']) ?>
            <div class="form-group mb-2">
                <label for="email" class="text-white">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
            </div>
            <div class="form-group mb-2">
                <label for="password" class="text-white">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
            </div>
            <button type="submit" class="btn btn-outline-success btn-block mb-2">Iniciar Sesión</button>
            <span class="text-success">¿No tienes cuenta? <a href="registro" class="text-success link-underline-success link-underline-opacity-50">Registrate</a></span>
        <?= form_close() ?>
    </div>
</section>
