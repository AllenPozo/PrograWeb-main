<?php 
$title ="Estructuras de Control PHP";
include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/header.php");
?>
<div class="col-lg-10 offset-lg-1">
    <p>
    <h2>Estructura de Control PHP - While</h2>
    </p>
    <!-- ************************** EJERCICIO 1 **************************** -->
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
                        <form method="post" action="while.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="numero1" placeholder="Número1">
                                <button class="btn btn-outline-secondary" type="submit" id="button">Evaluar</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
                <br /><br />
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_REQUEST["numero1"]) && $_REQUEST["numero1"]):
                ?>
                <div class="card">
                    <div class="card-header">
                        Respuesta
                    </div>
                    <div class="card-body">
                        <?php 
                        //echo $_REQUEST["numero1"]; 
                        $contador=21;
                        while ($contador <= 20){
                            echo $_REQUEST["numero1"] . " X " . $contador . " = " . ($_REQUEST["numero1"]*$contador) . "<br/>";
                            $contador++;
                        }
                        ?>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>




    <?php include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/footer.php"); ?>