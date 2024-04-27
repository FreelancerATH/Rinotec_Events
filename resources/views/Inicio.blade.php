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

    <!--carrucel star -->
    <div id="carouselExample" class="container carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carusel1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carusel2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carusel3.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--carrucel end -->

    <!--card star -->
    <div class="card mb-3 mx-auto mt-5 btn-outline-azulito" style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-11">
                <div class="card-body y" style="text-align: justify;">
                    <h3 class="card-title text-secundary">Congreso</h3>
                    <img src="{{ asset('img/rin.png') }}" class="col-md-7 float-md-end mb-2 ms-md-2" alt="..."
                        style="max-width: 30%;" />


                    <p class="text-secundary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis
                        tristique quam quis porta. Nam sed luctus dolor, ac ullamcorper dolor. Aenean luctus purus eu
                        tempor molestie. Proin id metus vel tellus hendrerit convallis facilisis eget mauris. Nulla in
                        elit ut libero facilisis tincidunt. Nulla condimentum, diam non placerat bibendum, risus magna
                        dictum justo, ultricies aliquet sapien purus in arcu. Nunc vel aliquet mauris, ac imperdiet
                        quam. Pellentesque tempor tellus nec ligula auctor, vel volutpat ante vehicula. Nam sagittis at
                        nibh eu gravida. Sed at massa cursus dui feugiat tincidunt. Quisque dui ex, pulvinar non turpis
                        ac, pulvinar dignissim nisi. Aliquam erat volutpat. Nunc sodales accumsan libero quis efficitur.
                    </p>
                    <p class="card-text text-end"><small class="text-body-secondary">Last updated 3 mins ago</small>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!--card end -->
    <!-- texto start-->
    <div class="clearfix mt-4 " style="margin-left: 30px; margin-right: 30px;">
        <img src="{{ asset('img/flecha.png') }}" class="col-md-4 float-md-start mb-4 me-md-4" alt="..."
            style="max-width: 20%;">

        <p style="text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tristique quam quis porta. Nam
            sed luctus dolor, ac ullamcorper dolor. Aenean luctus purus eu tempor molestie. Proin id metus vel tellus
            hendrerit convallis facilisis eget mauris. Nulla in elit ut libero facilisis tincidunt. Nulla condimentum,
            diam non placerat bibendum, risus magna dictum justo, ultricies aliquet sapien purus in arcu. Nunc vel
            aliquet mauris, ac imperdiet quam. Pellentesque tempor tellus nec ligula auctor, vel volutpat ante vehicula.
            Nam sagittis at nibh eu gravida. Sed at massa cursus dui feugiat tincidunt. Quisque dui ex, pulvinar non
            turpis ac, pulvinar dignissim nisi. Aliquam erat volutpat. Nunc sodales accumsan libero quis.
        </p>

        <h3 class="text-morado">Lorem ipsum</h3>

        <img src="{{ asset('img/flecha2.png') }}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="..."
            style="max-width: 20%;">

        <p style="text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tristique quam quis porta. Nam
            sed luctus dolor, ac ullamcorper dolor. Aenean luctus purus eu tempor molestie. Proin id metus vel tellus
            hendrerit convallis facilisis eget mauris. Nulla in elit ut libero facilisis tincidunt. Nulla condimentum,
            diam non placerat bibendum, risus magna dictum justo, ultricies aliquet sapien purus in arcu. Nunc vel
            aliquet mauris, ac imperdiet quam. Pellentesque tempor tellus nec ligula auctor, vel volutpat ante vehicula.
            Nam sagittis at nibh eu gravida. Sed at massa cursus dui feugiat tincidunt. Quisque dui ex, pulvinar non
            turpis ac, pulvinar dignissim nisi. Aliquam erat volutpat. Nunc sodales accumsan libero quis efficitur.
        </p>
        <img src="{{ asset('img/rin.png') }}" class="col-md-7 float-md-end mb-4 ms-md-4" alt="..."
            style="max-width: 20%;" />
        <p style="text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis tristique quam quis porta. Nam
            sed luctus dolor, ac ullamcorper dolor. Aenean luctus purus eu tempor molestie. Proin id metus vel tellus
            hendrerit convallis facilisis eget mauris. Nulla in elit ut libero facilisis tincidunt. Nulla condimentum,
            diam non placerat bibendum, risus magna dictum justo, ultricies aliquet sapien purus in arcu. Nunc vel
            aliquet mauris, ac imperdiet quam. Pellentesque tempor tellus nec ligula auctor, vel volutpat ante vehicula.
            Nam sagittis at nibh eu gravida. Sed at massa cursus dui feugiat tincidunt. Quisque dui ex, pulvinar non
            turpis ac, pulvinar dignissim nisi. Aliquam erat volutpat. Nunc sodales accumsan libero quis efficitur.
        </p>
    </div>
    <!-- texto end-->

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
                                    class="bi bi-envelope h3 text-white"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i
                                    class="bi bi-instagram h3 text-white"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <h6 class="text-center text-white">Congreso 2024-Rinotec-Events</h6>
    </footer>


</body>

</html>
