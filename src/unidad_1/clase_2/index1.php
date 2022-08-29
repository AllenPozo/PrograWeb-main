<?php 
$title ="Nociones Básicas de PHP";
include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/header.php");
//var_dump($_SERVER);
?>
<!-- CAROUSEL DE FOTOS -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes/PHP.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes/php2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes/Php3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<!-- ACORDIONES -->
<div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Ejemplo #1: Variables y Salidas en Pantalla
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <?php

                    $a = 1;

                    function test()
                    {
                        //$a=5;
                        global $a;
                        echo $a; /* referencia a una variable del ámbito local */
                    }
                    //echo $a;
                    test();
                    ?>

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Ejemplo #2: Operadores Númericos
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <?php

                    $a = 2;

                    echo $a; //2
                    echo ++$a;   //3
                    echo --$a;   //2
                    echo $a++;   //2
                    echo $a--;   //3


                   
?>

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Ejemplo #3: Operadores de Comparación
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <?php

$a = 3;
$b = 3;

echo $a == $b . "</br>";
echo $a;
echo $a > $b . "</br>";  
echo $b;
echo $a <= $b . "</br>";



?>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <h2>Ejemplo de Tabla</h2>
  <p>Controles GIT</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Numero</th>
        <th>Comando</th>
        <th>Uso</th>
    
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Status</td>
        <td>Informacion Necesario sobre la rama actual</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Branch</td>
        <td>Conocer las Ramas Actuales</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Add</td>
        <td>Agrega archivos que no estaban en el GIT</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
<h3 >
<?php
    echo date("l jS \of F Y h:i:s A");
        ?>
    </h3>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/prograweb/public/footer.php"); ?>