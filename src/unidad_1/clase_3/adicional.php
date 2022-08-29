<?php 
$title ="Estructuras de Control PHP";
include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/header.php");
?>
<div class="col-lg-10 offset-lg-1">
    <p>
    <h2>Estructura de Control PHP - Ejercicios Adicionales</h2>
    </p>
    <!-- ************************** EJERCICIO 1 **************************** -->
    <hr />
    <div class="col-lg-10 offset-lg-1 text-center">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
                <div class="card">
                    <div class="card-header">
                        Ejercicio Adicional
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Deportes</h5>
                        <p class="card-text">
                        <form method="post" action="adicional.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi-universal-access"></i>
                                </span>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="futbol" value="futbol"> Futbol<br />
                                    <input type="checkbox" name="basket" value="basket"> Basketball<br />
                                    <input type="checkbox" name="tenis" value="tenis"> Tenis<br />
                                    <input type="checkbox" name="beis" value="beis"> Beisbol<br />
                                    <input type="checkbox" name="voley" value="voley"> Volleyball<br />
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" name="estudios" value="1"> No tiene estudios<br />
                                    <input type="radio" name="estudios" value="2"> Estudios Primarios<br />
                                    <input type="radio" name="estudios" value="3" checked> Estudios Secundarios<br />
                                </div>
                            </div>
                            <button class="btn btn-outline-secondary" type="submit" id="button">Enviar</button>
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
                       var_dump($_REQUEST);
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