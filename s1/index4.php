<?php

try {

    // 1. Conexión
    $mbd = new PDO('mysql:host=localhost;dbname=desarrollo_web_2', "dweb", "AccesoRoot123");

    // 2. Crear la consulta
    $sql = "INSERT INTO usuarios (nombres, apellidos, email, identificacion) VALUES (?, ?, ?, ?)";

    // $_POST 

    // 3. Preparar la consulta
    $statement = $mbd->prepare($sql);
    $statement->bindParam(1, $);
    $statement->bindParam(2, $);
    $statement->bindParam(3, $);
    $statement->bindParam(4, $);

    // 4. Ejecutar la consulta
    $statement->execute();

    $results = $statement->fetch(PDO::FETCH_ASSOC);

    header('Content-type:application/json;charset=utf-8');
    echo json_encode($results);

    // Desconexión
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
