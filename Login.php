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
            <div class="col-6">
                <img src="./src/img/LoginLogo.png" class="" alt="">
            </div>
            <div class="col-6">
                <div class="row m-5 text-center">
                    <h1>BIENVENIDO</h1>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <form action="Loguearse.php" method="post">
                            <div class="imgcontainer mb-3">
                                <img src="./src/img/avatar.png" alt="Avatar" class="w-25 h-25">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="uname" required>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password"name="psw"  required>
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" name="login_enter">Sign in</button>
                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="./Register.php">Register</a></p>
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