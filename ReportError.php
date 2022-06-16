<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./src/img/medico.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11ad6245f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/css/Index-Styles.css">
    <title>Reportar error</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light nbg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./Index.php">
                    <img src="./src/img/MEDISAFE-LOGO.png" class="d-inline-block align-text-center msLogo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto menu">
                    <li class="nav-item"><a class="nav-link" href="./Index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Relatives.php">Familiares</a></li>
                    <li class="nav-item"><a class="nav-link" href="./History.php">Historial</a></li>
                    <li class="nav-item dropdown">
                        <!-- Botón opciones cuenta -->
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./src/img/pfp.png" class="d-inline-block align-text-center">
                            
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./MyAccount.php">Mi cuenta</a></li>
                            <li><a class="dropdown-item" href="./Help.html">Ayuda</a></li>
                            <li><a class="dropdown-item" href="./ReportError.php">Reportar error</a></li>
                            <li><a class="dropdown-item" href="./Login.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="faq">
            <div class="container text-center">
                <h1>REPORTAR ERROR</h1>
                <div class="card m-5">
                    <div class="card-header card-title">
                        Reporta el error encontrado
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form action="ErrorEnviar.php"  method="post">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 600px" name="error"></textarea>
                                <label for="floatingTextarea2">Explica el error encontrado</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="error_enter">Enviar reporte</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>