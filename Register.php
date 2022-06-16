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
    <link rel="stylesheet" href="./src/css/Login-Styles.css">
    <title>Medisafe Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Columna imagen de bg -->
            <div class="col-6">
                <img src="./src/img/LoginLogo.png" class="" alt="">
            </div>
            <!-- Columna form de Login -->
            <div class="col-6">
                <div class="row m-5 text-center">
                    <h1>REGISTRATE</h1>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <form action="Loguearse.php" method="post">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="fltInputName" placeholder="Name"
                                        name="name" required>
                                        <label for="fltInputName">Nombre</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="fltInputLastName"
                                            placeholder="Last name" name="apellido" required>
                                        <label for="fltInputLastName">Apellido</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="fltInputEmail"
                                    placeholder="name@example.com" name="correo_electric" required>
                                <label for="fltInputEmail">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="fltInputPassword" placeholder="Password" name="password_one"
                                    required>
                                <label for="fltInputPhoneNumber">Contraseña</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="fltInputPassword" placeholder="Password" name="password_repit"
                                    required>
                                <label for="fltInputPhoneNumber">Repita la contraseña</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="register_enter">Registarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>