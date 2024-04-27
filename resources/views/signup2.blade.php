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
                <a class="btn btn-outline-verde2  rounded-pill border-0" href="signup">Estudiante</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-verde2 text-dark rounded-pill border-0" href="signup2">Publico General</a>
            </li>
        </ul>
    </div>



    <!--card star -->
    <div class="card mb-3 mx-auto mt-5 btn-outline-blanquito" style="max-width: 600px;">
        <div class="row g-0">
            <div class="col-md-11">
                <div class="card-body y px-3" style="text-align: justify;">
                    <img src="{{ asset('img/logorino.png') }}" alt="Logo" width="150" height="70"
                        class="d-block mx-auto align-text-top">
                    <div>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-5">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationCustom01" value="Mark"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="validationCustom02" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="validationCustom04" class="form-label">¿Comó se entero?</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Seleccionar</option>
                                    <option>Redes sociales</option>
                                    <option>Publicidad</option>
                                    <option>Algun conocido</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="validationCustom01" class="form-label">Telefono</label>
                                <input type="int" class="form-control" id="validationCustom05" value="#"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control form-control-sm mx-auto"
                                    id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <label for="inputPassword5" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" id="inputPassword5"
                                    class="form-control form-control-sm mx-auto" aria-describedby="passwordHelpBlock">
                                <button class="btn btn-outline-verde1" type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>

                        </form>

                    </div>
                    <a class="btn btn-outline-verde1 text-white rounded-pill text-center d-block mx-auto mt-4"
                        href="sesion">Entrar</a>
                    <p class="mt-3" style="text-align: center">¿Aún no tienes una cuenta <a
                            class="tn-outline-verde1 " href="#">Regístrate</a>? </p>
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
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('inputPassword5');

    togglePassword.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });
</script>


</html>
