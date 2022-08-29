<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" > 
    <link rel="stylesheet" type="text/css" href="/prograweb/public/bootstrap/css/bootstrap.css" media="screen">
    <!-- Libreria de sweetalert  -->
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script> 
    <style type="text/css">
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {

        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .dropdown-menu .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {

        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }

    }

    /* ============ small devices .end// ============ */
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- MENU NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/prograweb/src/">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle show" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false"> Unidad 1 </a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li><a class="dropdown-item"
                                    href="http://localhost/prograweb/src/unidad_1/clase_2/index1.php">Semana 2</a></li>
                            <li><a class="dropdown-item" href="#">Semana 3</a>
                                <ul class="submenu dropdown-menu list-group list-group-flush">
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/if.php">If</a></li>
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/Switch.php">Switch</a>
                                    </li>
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/while.php">While</a>
                                    </li>
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/dowhile.php">Do -
                                            While</a></li>
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/for.php">For</a>
                                    </li>
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/foreach.php">Foreach</a>
                                    </li>
                                    <li class="list-group-item list-group-item-primary"><a class="dropdown-item"
                                            href="http://localhost/prograweb/src/unidad_1/clase_3/adicional.php">Ejercicios Adicionales</a>
                                    </li>
                            </li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="http://localhost/prograweb/src/unidad_1/clase_4/">Semana 4</a></li>
                    <li><a class="dropdown-item" href="http://localhost/prograweb/src/unidad_1/clase_5/">Semana 5</a></li>
                    </li>
                </ul>
            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>