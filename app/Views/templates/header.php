<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/miestilo.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">
    <header>
        <div class="d-flex bg-dark">
            <marquee direction="left" bg-color='black' class="text-warning">Descuentos en muchos productos, no te lo pierdas!</marquee>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme='dark'>
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="<?php echo base_url('assets/images/Chess.svg'); ?>" class="img-fluid" width="80px" alt="logo"></a>
                <?php if (isset($isLoggedIn) && $isLoggedIn) : ?>

                    <div class="gap-2 d-flex justify-content-end align-items-end">
                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse-user">
                            <button class="user-btn btn btn-dark dropdown-toggle d-lg-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url("assets/images/person-icon.svg") ?>" class="img-fluid" alt="">
                                <span><?= esc($usuario_nombre) ?></span>
                            </button>

                            <?php if (isset($rol_id) && $rol_id === '1') : ?>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto <?php echo (current_url() == base_url('/ver_usuarios')) ? 'active' : ''; ?>" href="<?php echo base_url('/ver_usuarios'); ?>">Ver usuarios</a></li>
                                    <li><a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto " href="<?php echo base_url('/logout'); ?>"><svg class="logo-salir" alt="cerrar sesión" width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 4.354v6.651l7.442-.001L17.72 9.28a.75.75 0 0 1-.073-.976l.073-.084a.75.75 0 0 1 .976-.073l.084.073 2.997 2.997a.75.75 0 0 1 .073.976l-.073.084-2.996 3.004a.75.75 0 0 1-1.134-.975l.072-.085 1.713-1.717-7.431.001L12 19.25a.75.75 0 0 1-.88.739l-8.5-1.502A.75.75 0 0 1 2 17.75V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74ZM8.502 11.5a1.002 1.002 0 1 0 0 2.004 1.002 1.002 0 0 0 0-2.004Z" fill="white" />
                                                <path d="M13 18.501h.765l.102-.006a.75.75 0 0 0 .648-.745l-.007-4.25H13v5.001ZM13.002 10 13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.102.007 4.251h-1.5Z" fill="white" />
                                            </svg></a></li>
                                </ul>
                            <?php else : ?>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto " href="<?php echo base_url('/logout'); ?>"><svg class="logo-salir" alt="cerrar sesión" width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 4.354v6.651l7.442-.001L17.72 9.28a.75.75 0 0 1-.073-.976l.073-.084a.75.75 0 0 1 .976-.073l.084.073 2.997 2.997a.75.75 0 0 1 .073.976l-.073.084-2.996 3.004a.75.75 0 0 1-1.134-.975l.072-.085 1.713-1.717-7.431.001L12 19.25a.75.75 0 0 1-.88.739l-8.5-1.502A.75.75 0 0 1 2 17.75V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74ZM8.502 11.5a1.002 1.002 0 1 0 0 2.004 1.002 1.002 0 0 0 0-2.004Z" fill="white" />
                                                <path d="M13 18.501h.765l.102-.006a.75.75 0 0 0 .648-.745l-.007-4.25H13v5.001ZM13.002 10 13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.102.007 4.251h-1.5Z" fill="white" />
                                            </svg></a></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse mx-auto text-center justify-content-start" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mb-2 mb-lg-0 text-white">
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('/')) ? 'active' : ''; ?>" href="<?php echo base_url('/') ?>">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('/acercade')) ? 'active' : ''; ?>" href="<?php echo base_url('/acercade'); ?>">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('/quienesSomos')) ? 'active' : ''; ?>" href="<?php echo base_url('/quienesSomos'); ?>">Quienes Somos</a>
                            </li>
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                            </li>
                            <li class="nav-item">
                                <ul class="navbar-nav">
                                    <div class="collapse-user">
                                        <li class="nav-item dropdown">
                                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item dropdown">
                                                        <button class="user-btn btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="<?= base_url('assets/images/person-icon.svg') ?>" class="img-fluid" alt="Icono de persona">
                                                            <span><?= esc($usuario_nombre) ?></span>
                                                        </button>
                                                        <?php if (isset($rol_id) && $rol_id === '1') : ?>
                                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                                <li><a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto <?php echo (current_url() == base_url('/ver_usuarios')) ? 'active' : ''; ?>" href="<?php echo base_url('/ver_usuarios'); ?>">Ver usuarios</a></li>
                                                                <li><a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto" href="<?php echo base_url('/logout'); ?>"><svg class="logo-salir" alt="cerrar sesión" width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path style="fill: white" d="M12 4.354v6.651l7.442-.001L17.72 9.28a.75.75 0 0 1-.073-.976l.073-.084a.75.75 0 0 1 .976-.073l.084.073 2.997 2.997a.75.75 0 0 1 .073.976l-.073.084-2.996 3.004a.75.75 0 0 1-1.134-.975l.072-.085 1.713-1.717-7.431.001L12 19.25a.75.75 0 0 1-.88.739l-8.5-1.502A.75.75 0 0 1 2 17.75V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74ZM8.502 11.5a1.002 1.002 0 1 0 0 2.004 1.002 1.002 0 0 0 0-2.004Z" fill="#212121" />
                                                                            <path d="M13 18.501h.765l.102-.006a.75.75 0 0 0 .648-.745l-.007-4.25H13v5.001ZM13.002 10 13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.102.007 4.251h-1.5Z" fill="#212121" />
                                                                        </svg></a></li>
                                                            </ul>
                                                        <?php else : ?>
                                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                                <li><a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto" href="<?php echo base_url('/logout'); ?>"><svg class="logo-salir" alt="cerrar sesión" width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                            <path style="fill: white" d="M12 4.354v6.651l7.442-.001L17.72 9.28a.75.75 0 0 1-.073-.976l.073-.084a.75.75 0 0 1 .976-.073l.084.073 2.997 2.997a.75.75 0 0 1 .073.976l-.073.084-2.996 3.004a.75.75 0 0 1-1.134-.975l.072-.085 1.713-1.717-7.431.001L12 19.25a.75.75 0 0 1-.88.739l-8.5-1.502A.75.75 0 0 1 2 17.75V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74ZM8.502 11.5a1.002 1.002 0 1 0 0 2.004 1.002 1.002 0 0 0 0-2.004Z" fill="#212121" />
                                                                            <path d="M13 18.501h.765l.102-.006a.75.75 0 0 0 .648-.745l-.007-4.25H13v5.001ZM13.002 10 13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.102.007 4.251h-1.5Z" fill="#212121" />
                                                                        </svg></a></li>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex d-lg-none" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <form class="d-none d-lg-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                <?php else : ?>
                    <div class="gap-2 d-flex justify-content-end align-items-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse-user">
                            <button class="user-btn btn btn-dark dropdown-toggle d-lg-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url("assets/images/person-icon.svg") ?>" class="img-fluid" alt="">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li class="nav-item">
                                    <a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto <?php echo (current_url() == base_url('/login')) ? 'active' : ''; ?>" href="<?php echo base_url('/login'); ?>">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto <?php echo (current_url() == base_url('/registro')) ? 'active' : ''; ?>" href="<?php echo base_url('/registro'); ?>">Registro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse text-center justify-content-start" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mb-2 mb-lg-0 text-white">
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('/')) ? 'active' : ''; ?>" href="<?php echo base_url('/') ?>">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('/acercade')) ? 'active' : ''; ?>" href="<?php echo base_url('/acercade'); ?>">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('/quienesSomos')) ? 'active' : ''; ?>" href="<?php echo base_url('/quienesSomos'); ?>">Quienes Somos</a>
                            </li>
                            <li class="nav-item">
                            </li>
                            <ul class="navbar-nav d-none d-lg-block">
                                <div class="collapse-user">
                                    <li class="nav-item dropdown">
                                        <button class="user-btn btn btn-dark dropdown-toggle ms-2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="<?php echo base_url("assets/images/person-icon.svg") ?>" class="img-fluid" alt="">
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto <?php echo (current_url() == base_url('/login')) ? 'active' : ''; ?>" href="<?php echo base_url('/login'); ?>">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-item text-center mb-2 mx-2 w-auto <?php echo (current_url() == base_url('/registro')) ? 'active' : ''; ?>" href="<?php echo base_url('/registro'); ?>">Registro</a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                            </li>
                        </ul>
                    </div>
                    <form class="d-none d-lg-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                <?php endif; ?>
            </div>
        </nav>
    </header>