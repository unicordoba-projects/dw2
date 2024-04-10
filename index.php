<?php

try {
    // 1. Conexión
    $mbd = new PDO('mysql:host=localhost;dbname=desarrollo_web_2', "dweb", "AccesoRoot123");

    // 2. Crear la consulta
    $sql = "SELECT * FROM usuarios";

    // 3. Ejecuta rla consulta
    $res = $mbd->query($sql);

    // 4. Muestro los datos
    $respuesta = [];
    foreach ($res as $fila) {
        // print_r($fila);
        $respuesta[] = $fila;
    }

    header('Content-type:application/json;charset=utf-8');
    echo json_encode($respuesta);

    // Desconexión
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
