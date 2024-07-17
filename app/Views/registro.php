<section class="pagina-registro min-vh-100 d-flex justify-content-center align-items-center flex-column bg-dark">
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <h2 class="text-center mb-4 text-white mb-2">Registro</h2>
        <form class="d-flex flex-column justify-content-center w-25">
            <div class="form-group mb-2">
                <label for="nombre" class="text-white mb-2">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group mb-2">
                <label for="apellido" class="text-white mb-2">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group mb-2">
                <label for="email" class="text-white mb-2 ">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
            </div>
            <div class="form-group mb-2">
                <label for="password" class="text-white mb-2">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
            </div>
            <div class="form-group mb-2">
                <label for="confirmPassword" class="text-white mb-2 ">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirma tu contraseña">
            </div>
            <button type="submit" class="btn btn-outline-success btn-block mb-2">Registrarse</button>
            <span class="text-success">¿Ya posees una cuenta? <a href="login" class="text-success link-underline-success link-underline-opacity-50">Incia Sesion</a></span>
        </form>
    </div>
</section>