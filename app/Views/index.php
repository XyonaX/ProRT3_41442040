<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPetStore</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url()?> assets/css/miestilo.css">
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
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienesSomos.php">Quienes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Registro</a>
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
    <section class="hero-slide cointar-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="assets/images/slide1.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/slide2.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="animales container-fluid">
        <div class="row gap-4 justify-content-evenly">
            <div class="card mt-3" style="width: 10rem; border: none;">
                <a href="">
                    <img src="assets/images/gato.webp" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <p class="text-center">gatos</p>
                </div>
            </div>
            <div class="card mt-3" style="width: 10rem; border: none;">
                <a href="">
                    <img src="assets/images/perro.webp" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <p class="text-center">perros</p>
                </div>
            </div>
            <div class="card mt-3" style="width: 10rem; border: none;">
                <a href="">
                    <img src="assets/images/ave.webp" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <p class="text-center">aves</p>
                </div>
            </div>
            <div class="card mt-3" style="width: 10rem; border: none;">
                <a href="">
                    <img src="assets/images/pez.webp" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <p class="text-center">peces</p>
                </div>
            </div>
        </div>
    </section>
    <section class="promociones">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bg-dark mb-3">
                        <h2 class="text-center text-white p-2">Promociones del mes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 d-flex flex-column">
                        <img src="assets/images/purina.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center flex-grow-1">Pro Plan Perro Adulto Grande X 15 Kg + 3 Kg</h5>
                            <p class="card-text text-center flex-grow-1 text-success fw-bold">$ 74.767</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 d-flex flex-column">
                        <img src="assets/images/purina-cat.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center flex-grow-1">Pro Plan Gato Adulto Urinary Care X 7.5 Kg</h5>
                            <p class="card-text text-center flex-grow-1 text-success fw-bold">$ 74.024</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 d-flex flex-column">
                        <img src="assets/images/whole-earth.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center flex-grow-1">Whole Earth Farms Perro Adulto</h5>
                            <p class="card-text text-center flex-grow-1 text-success fw-bold">$ 75.252</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 d-flex flex-column">
                        <img src="assets/images/pedigree.webp" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center flex-grow-1">Pedigree Perro Cachorro Sano Crecimiento X 21 Kg</h5>
                            <p class="card-text text-center flex-grow-1 text-success fw-bold ">$ 44.527</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>