<html>
    <head>
        <title> Ejercicios PHP </title>
</head>
<body>
<h1> EJERCICIO 1</h1>
<fieldset>
    <legend> Operaciones con PHP</legend>
Primer Numero: <input type="text" name="numero1"><br/>
Segundo Numero: <input type="text" name="numero2"><br/><br/>

<input type="radio" name="operaciones" value="Suma" id="Suma">
<label for="Suma"> Suma </label>
<input type="radio" name="operaciones" value="Resta" id="Resta">
<label for="Resta"> Resta </label>
<input type="radio" name="operaciones" value="Multiplicacion" id="Multiplicacion">
<label for="Multiplicacion"> Multiplicacion </label>
<input type="radio" name="operaciones" value="Division" id="Division">
<!-- se corrigio la "c" por la "s" en la palabra division. !-->

<label for="Division"> Division </label>
<br>
<input type="submit" value="Calcular"></br>

<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operaciones = $_POST['operaciones'];

function operacion($num1,$num2,$operaciones){
    $resultado =0;
    if($operaciones == "Suma"){
        $resultado = $num1 + $num2;
    }else if($operaciones == "Resta"){
        $resultado = $num1 - $num2;
    }else if($operaciones == "Multiplicacion"){
        $resultado = $num1 * $num2;
    }else if($operaciones == "Division"){
        $resultado = $num1 / $num2;
    }
    return $resultado;
}
 ?>
 <?php
 echo 'El resultado de la operacion escogida es:' . operacion($num1,$num2,$operaciones);
 ?>

<br>

<a href="ejercicio2.php" target="_blank">SIGUIENTE EJERCICIO</a>
</body>
</html>
 