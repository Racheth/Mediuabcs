<?php
include("List_falimy.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./src/img/medico.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11ad6245f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/css/Index-Styles.css">
    <title>Relatives</title>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./Index.php">
                    <img src="./src/img/MEDISAFE-LOGO.png" class="d-inline-block align-text-center msLogo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./Index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="./Relatives.php">Relatives</a></li>
                    <li class="nav-item"><a class="nav-link" href="./History.php">Historial</a></li>
                    <li class="nav-item dropdown">
                        <!-- Botón opciones cuenta -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./src/img/pfp.png" class="d-inline-block align-text-center">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./MyAccount.php">My account</a></li>
                            <li><a class="dropdown-item" href="#">Help</a></li>
                            <li><a class="dropdown-item" href="#">Report error</a></li>
                            <li><a class="dropdown-item" href="./Login.php">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="Relatives">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>RELATIVES</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Botón añadir familiar -->
                        <button type="button" class="btn btn-outline-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir un familiar
                            <i class="fa-solid fa-circle-plus"></i>
                        </button>
                        <form action="Loguearse.php" method="post">
                            <!-- Modal añadir familiar -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Añadir un familiar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="fltInputName" placeholder="Name" name="namef" required>
                                                        <label for="fltInputName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="fltInputLastName" placeholder="Last name" name="apellidof" required>
                                                        <label for="fltInputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="fltInputPhoneNumber" placeholder="612" name="telefonof" required>
                                                <label for="fltInputPhoneNumber">Teléfono</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="fltInputEmail" placeholder="name@example.com" name="correof" required>
                                                <label for="fltInputEmail">Correo electrónico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="fltSelectRelative" aria-label="Floating label select example" name="parentesco" required>
                                                    <option selected>Seleccione el tipo</option>
                                                    <option value="Madre">Madre</option>
                                                    <option value="Padre">Padre</option>
                                                    <option value="Abuelo/a">Abuelo/a</option>
                                                    <option value="Tio/a">Tio/a</option>
                                                    <option value="Primo/a">Primo/a</option>
                                                    <option value="Hermano/a">Hermano/a</option>
                                                    <option value="Pareja">Pareja</option>
                                                    <option value="Esposo/a">Esposo/a</option>
                                                    <option value="Hijo/a">Hijo/a</option>
                                                    <option value="Amigo/a">Amigo/a</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                                <label for="fltSelectRelative">Parentesco</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="relative_enter">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Tabla -->
                        <section>
                            <?php
                            echo $tabla;
                            ?>
                        </section>
                    </div>
                </div>
            </div>
            </form>
        </section>
    </main>
</body>

</html>