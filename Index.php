<?php
include("./List_alarm.php")
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
    <title>Home</title>

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
                    <li class="nav-item"><a class="nav-link active" href="./Index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Relatives.php">Relatives</a></li>
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
                            <li><a class="dropdown-item" href="ReportError.php">Report error</a></li>
                            <li><a class="dropdown-item" href="./Login.php">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="calendarWidgetCtr">
            <div class="container calendar-ctr light">
                <div class="row">
                    <div class="col">
                        <!-- Calendario -->
                        <div class="calendar">
                            <div class="calendar-header">
                                <span class="month-picker" id="month-picker">
                                    June
                                </span>
                                <div class="year-picker">
                                    <span class="year-change" id="prev-year">
                                        <pre><</pre>
                                    </span>
                                    <span id="year">2022</span>
                                    <span class="year-change" id="next-year">
                                        <pre>></pre>
                                    </span>
                                </div>
                            </div>
                            <div class="calendar-body">
                                <div class="calendar-week-day">
                                    <div>Sun</div>
                                    <div>Mon</div>
                                    <div>Tue</div>
                                    <div>Wed</div>
                                    <div>Thu</div>
                                    <div>Fri</div>
                                    <div>Sat</div>
                                </div>
                                <div class="calendar-days">
                                    <div>1
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                    <div>1</div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                </div>
                            </div>
                            <div class="month-list"></div>
                        </div>
                        <script src="./src/js/Calendar.js"></script>
                    </div>
                </div>
                <!-- Botón añadir medicina -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir una medicina
                    <i class="fa-solid fa-circle-plus"></i>
                </button>
                <!-- Modal añadir medicina -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir una medicina</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="loguearse.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="medicamento" placeholder="Paracetamol">
                                        <label for="floatingInput">¿Qué medicamento quiere agregar?</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelectType" aria-label="Floating label select example" name="forma" onchange="selectUnit()">
                                            <option selected>Seleccione el tipo</option>
                                            <option value="Pastilla">Pastilla</option>
                                            <option value="Solución">Solución</option>
                                            <option value="Inyección">Inyección</option>
                                            <option value="Polvo">Polvo</option>
                                            <option value="Gotas">Gotas</option>
                                            <option value="Inhalador">Inhalador</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                        <label for="floatingSelectType">¿En qué forma es el medicamento?</label>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInputGrid" name="dosis" placeholder="20">
                                                <label for="floatingInputGrid">¿Qué dosis tiene el medicamento?</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3" id="selectUnit">
                                                <select class="form-select" id="floatingSelectGrid">
                                                    <option selected>Elige la unidad</option>
                                                    <option value="1"></option>
                                                    <option value="2"></option>
                                                    <option value="3"></option>
                                                </select>
                                                <label for="floatingSelectGrid">Unidad</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelectEveryday" aria-label="Floating label select example" name="necesario" onchange="isEveryday()">
                                            <option selected>Eliga una opción</option>
                                            <option value="Sí">Sí</option>
                                            <option value="No">No</option>
                                            <option value="Solo según sea necesario">Solo según sea necesario</option>
                                        </select>
                                        <label for="floatingSelect">¿Necesita tomar este medicamento todos los días?</label>
                                    </div>
                                    <div class="form-floating mb-3" id="ctrSelectEveryOnce">
                                        <select class="form-select" id="floatingSelectEveryOnce" aria-label="Floating label select example" name="frecuencia" onchange="newDosis()">
                                            <option selected>Eliga una opción</option>
                                            <option value="Una vez al día">Una vez al día</option>
                                            <option value="Dos veces al día">Dos veces al día</option>
                                            <option value="3 veces al día">3 veces al día</option>
                                            <option value="4 veces al día">4 veces al día</option>
                                            <option value="6 veces al día">6 veces al día</option>
                                            <option value="Cada 6 horas">Cada 6 horas</option>
                                            <option value="Solo según sea necesario">Solo según sea necesario</option>
                                            <option value="Otro(a)">Otro(a)</option>
                                        </select>
                                        <label for="floatingSelectEveryOnce">¿Con qué frecuencia lo/la toma?</label>
                                    </div>
                                    <div class="form-floating cs-form mb-3" id="ctr1stDose">
                                    </div>
                                    <div class="form-floating">
                                        <input id="startDate" class="form-control" type="date" name="refil" />
                                        <label for="startDate">Recordatorio de refill</label>
                                    </div>
                                    <script src="./src/js/DynamicForm.js" type="text/javascript"></script>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="Account_enter">Save changes</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <!-- Carousel -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="list-group mb-5">
                            <?php
                            echo $tabla;

                            ?>
                            <!-- <a href="#" class="list-group-item list-group-item-action align-items-a" aria-current="true">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <h5 class="mb-1"> $alumnosFila[MEDICAMENTO]</h5>
                                    <button type="button" class="btn btn-primary">Tomar </button>
                                </div>
                                <p class="mb-1">Hora de consumo : $alumnosFila[PRIMERA_DOSIS] </p>
                                <p class="mb-1">Dosis : $alumnosFila[DOSIS]</p>
                                <small>Tipos : $alumnosFila[TIPO]</small>
                            </a>  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>