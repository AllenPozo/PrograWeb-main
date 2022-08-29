<?php

function leer($nombre, $modo){
    $contents='';
    $fp = fopen($nombre, $modo);
    if (!$fp){
        return 0;
    }
    if(filesize($nombre) > 0){
        $contents = fread($fp, filesize($nombre));
    }
    fclose($fp);
    return $contents;
}

function escribir($nombre, $modo, $contenido){
    $fp = fopen($nombre, $modo);
    if (!$fp){
        return 0;
    }
    fwrite($fp, "\n" . $contenido);   
    fclose($fp);
}


?>