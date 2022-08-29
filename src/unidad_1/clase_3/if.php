<?php 
$title ="Estructuras de Control PHP";
include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/header.php");
?>
<div class="col-lg-10 offset-lg-1">
    <p>
    <h2>Estructura de Control PHP - If</h2>
    </p>
    <!-- ************************** EJERCICIO 1 **************************** -->
    <hr />
    <div class="col-lg-10 offset-lg-1 text-center">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                <div class="card">
                    <div class="card-header">
                        <b>Ejercicio 1</b>
                        <p>(Ingrese una letra o string para ver el cambio)</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Deducir si el numero es múltiplo de 2</h5>
                        <p class="card-text">
                        <form method="post" action="if.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="numero1" placeholder="Número1" >
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
                        $resul =  $_REQUEST["numero1"];
                        if(is_numeric($resul)){
                                $resultado = $_REQUEST["numero1"] % 2;
                            if(!$resultado){
                                echo "El número es multiplo de 2";
                            }else{
                                echo "El número NO es multiplo de 2";
                            }
                        }else{
                            //Muestra una alerta
                            echo '<script type="text/javascript">'
                            , 'swal ( " ¡Error! " , " ¡Ingresaste una letra, Solo numeros! " ,  "error" );'
                            , '</script>'
                            ;
                        }
                        //antiguo codigo
                        /*$resultado = $_REQUEST["numero1"] % 2;
                        if(!$resultado){
                            echo "El número es multiplo de 2";
                        }else{
                            echo "El número NO es multiplo de 2";
                        }*/
                        ?>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
<!-- ************************** EJERCICIO 2 **************************** -->
<hr />
    <div class="col-lg-10 offset-lg-1 text-center">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                <div class="card">
                    <div class="card-header">
                    <b>  Ejercicio 2 </b>
                    </div>
                    <div class="card-body">
                       <h5 class="card-title">Deducir cual es el número Mayor</h5>
                        <p class="card-text">
                        <form method="post" action="if.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="numero2" placeholder="Número 2">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="text" class="form-control" name="numero3" placeholder="Número 3">
                            </div>
                            <button class="btn btn-outline-secondary" type="submit" id="button">Evaluar</button>
                        </form>
                        </p>
                    </div>
                </div>
                <br /><br />
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_REQUEST["numero2"]) &&$_REQUEST["numero2"]) && (isset($_REQUEST["numero3"]) && $_REQUEST["numero3"]) ):
                ?>
                <div class="card">
                    <div class="card-header">
                        Respuesta
                    </div>
                    <div class="card-body">
                    <?php 
                    
                    if($_REQUEST["numero2"] == $_REQUEST["numero3"]){
                        echo "Los números son iguales";
                    }elseif($_REQUEST["numero2"] > $_REQUEST["numero3"]){
                            echo "Número 2 es mayor";
                        }else{
                            echo "Número 3 es mayor";
                        }
                    
                   // echo $_REQUEST["numero2"] ." - ". $_REQUEST["numero3"]; 
                    
                    
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