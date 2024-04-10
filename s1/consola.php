<?php


$nombreVariable = "Esto es PHP";
$nombreNumerica = 10000;

// echo gettype($nombreVariable);
// echo gettype($nombreNumerica);

$arreglo = [1, "Desarrollo Web", true, null, ["Lunes", "Martes", "Miercoles"]];


function mostrar_arreglo($data)
{
    echo gettype($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

mostrar_arreglo($arreglo);
