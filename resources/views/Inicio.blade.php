<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rinotec-Events</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logorino.png') }}" alt="Logo" width="150" height="70"
                    class="d-inline-block align-text-top">
            </a>

            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-morado" aria-current="page" href="#">Conferencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-morado" href="#">Talleres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-morado" href="#">Horario</a>
                </li>
            </ul>
            <div class="d-inline-flex p-4 gap-2 ">
                <button class="btn btn-outline-morado " type="submit">Registro</button>
                <button class="btn btn-outline-morado " type="submit">Iniciar Sesión</button>
            </div>
        </div>
    </nav>


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
</body>

</html>
