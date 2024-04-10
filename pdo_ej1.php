<?php



try {
    $mbd = new PDO('mysql:host=localhost;dbname=desarrollo_web_2', "dwg2", "AccesoRoot123");

    $identificacion = $_POST['identificacion'];
    $sql = "SELECT * from usuarios WHERE identificacion = ?";

    // $res = $mbd->query($sql);
    // $resultado = [];
    // foreach ($res as $fila) {
    //     $respuesta[] = $fila;
    // }

    $statement = $mbd->prepare($sql);
    $statement->bindParam(1, $identificacion);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    header('Content-type:application/json;charset=utf-8');
    echo json_encode($results);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
