<?php

try {
    // 1. Conexión
    $mbd = new PDO('mysql:host=localhost;dbname=desarrollo_web_2', "dweb", "AccesoRoot123");

    // 2. Crear la consulta
    $sql = "SELECT * FROM usuarios";

    // 3. Preparar la consulta
    $statement = $mbd->prepare($sql);

    // 4. Ejecutar la consulta
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-type:application/json;charset=utf-8');
    echo json_encode($results);

    // Desconexión
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
