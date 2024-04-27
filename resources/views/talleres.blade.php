<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rinotec-Events</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <!-- nad star-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logorino.png') }}" alt="Logo" width="150" height="70"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-morado" aria-current="page" href="conferencias">Conferencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-morado" href="talleres">Talleres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-morado" href="#">Horario</a>
                    </li>
                </ul>
                <div class="d-inline-flex gap-2">
                    <a class="btn btn-outline-morado rounded-pill" href="signup">Registro</a>
                    <a class="btn btn-outline-morado rounded-pill" href="sesion">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- nav end -->
    <div class="d-flex justify-content-center gap-3">
        <ul class="nav">

            <li class="nav-item">
                <a class="btn btn-outline-verde2 rounded-pill border-0" href="conferencias">Conferencias</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-verde2 text-dark  rounded-pill border-0" href="talleres">Talleres</a>
            </li>
        </ul>
    </div>


    <!--card star -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ asset('img/carusel3.png') }}" alt="Reference Image" class="w-full"
                        crossorigin="anonymous">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
                        <img src="{{ asset('img/usu.png') }}" alt="Imagen" class="w-75" style="max-width: 30%;">
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Taller</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ asset('img/carusel1.png') }}" alt="Reference Image" class="w-full"
                        crossorigin="anonymous">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
                        <img src="{{ asset('img/usu.png') }}" alt="Imagen" class="w-75" style="max-width: 30%;">
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Taller</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ asset('img/carusel2.png') }}" alt="Reference Image" class="w-full"
                        crossorigin="anonymous">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
                        <img src="{{ asset('img/usu.png') }}" alt="Imagen" class="w-75" style="max-width: 30%;">
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Taller</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <!--card end -->


    <footer class="footer footer-azulito">
        <div class="container">
            <div class="row">
                <div class="col-md-4 float-md-start mb-4 me-md-4">
                    <img src="{{ asset('img/rino2.png') }}" alt="Logo" width="150" height="70">
                    <p class="text-white"> Si lo puedes imaginar, lo puedes programar </p>
                </div>
                <div class="col-md-3 float-md-end mb-3 ms-md-3">
                    <p class="text-white text-center">Síguenos en nuestras redes sociales:</p>
                    <ul class="list-inline mx-auto text-center">
                        <li class="list-inline-item text-white"><a href="#"><i
                                    class="bi bi-facebook h3 text-white"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i
                                    class="bi bi-envelope h3 text-white"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i
                                    class="bi bi-instagram h3 text-white"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <h6 class="text-center text-white">Congreso 2024-Rinotec-Events</h6>
    </footer>


</body>


</html>
