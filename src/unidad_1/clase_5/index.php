<?php 
$title ="Estructuras de Control PHP";
include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/header.php");
?>
<div class="col-lg-10 offset-lg-1">
    <p>
        <h2>Gestión de Ficheros PHP</h2>
    </p>
    <hr />
    <div class="col-lg-10 offset-lg-1 text-center">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                <div class="card">
                    <div class="card-header">
                        Ejercicio 1
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tabla de Multiplicar</h5>
                        <p class="card-text">
                        <form method="post" action="index.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="number" class="form-control" name="numero1" placeholder="Número1" required>
                                <button class="btn btn-outline-secondary" type="submit" id="button">Evaluar</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
                <br /><br />
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST" ):
                ?>
                <div class="card">
                    <div class="card-header">
                        Respuesta
                    </div>
                    <div class="card-body">
                        <?php 
                            include("fichero.php");
                            escribir("numeros.txt", "a", $_REQUEST['numero1']);
                            var_dump(leer("numeros.txt", "r"));
                        ?>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/footer.php"); ?>