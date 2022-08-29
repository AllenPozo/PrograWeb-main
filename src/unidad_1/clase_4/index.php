<?php 
$title ="Estructuras de Control PHP";
include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/header.php");

function sumar_array($numeros){
    $total=0;
    foreach($numeros as $data){
        $total=$total+$data;
    }
    return $total;
}


?>
<div class="col-lg-10 offset-lg-1">
    <p>
    <h2>Funciones PHP</h2>
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
                        <h5 class="card-title">Suma de Valores Array</h5>
                        <p class="card-text">
                        <form method="post" action="index.php">
                            <input type="hidden" name="bandera" value="0">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="numero1"
                                    placeholder="Cuantos números va a ingresar?" required>
                                <button class="btn btn-success" type="submit" id="button">Evaluar ☻</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
                <br /><br />
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"):
                        if(!$_REQUEST['bandera']):
                ?>

                <div class="card">
                    <div class="card-header">
                        Ingreso de <?= $_REQUEST["numero1"] ?> Datos para la suma
                    </div>
                    <div class="card-body">
                        <form method="post" action="index.php">
                            <input type="hidden" name="bandera" value="1">
                            <?php 
                                    echo $_REQUEST["numero1"]; 
                                    $cuenta=1;
                                    while($cuenta <= $_REQUEST["numero1"]){
                                    echo "<div class='input-group mb-3'><span class='input-group-text' id='basic-addon1'>#</span>";                                 
                                    echo "<input type='text' class='form-control' name='numero[]' placeholder='Número ' required>";                                     
                                    echo "</div><br/>";
                                    $cuenta++;
                                    }
                                    ?>
                            <button class="btn btn-success" type="submit" id="button">Evaluar ☻</button>
                        </form>

                    </div>
                </div>
                <?php else: ?>
                <div class="card">
                    <div class="card-header">
                        Respuesta
                    </div>
                    <div class="card-body">
                        
                            <?php 
                                   echo "El total de la suma: ". sumar_array($_REQUEST["numero"]);
                                    ?>
                                    <br> <br>
                                    <a href="index.php" class="btn btn-warning" type="submit" id="button">Intentar de nuevo ☻</a>
                        </form>
                    
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>




    <?php include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/footer.php"); ?>