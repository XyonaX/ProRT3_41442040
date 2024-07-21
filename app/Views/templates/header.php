<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url()?> assets/css/miestilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="d-flex bg-dark">
            <marquee direction="left" bg-color='black' class="text-warning">Descuentos en muchos productos, no te lo pierdas!</marquee>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme='dark'>
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="assets/images/Chess.svg" class="img-fluid" width="80px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo base_url('/') ?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienesSomos">Quienes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="acercade" class="nav-link">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a href="login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="registro" class="nav-link">Registro</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>