<?php

// require 'DB.php';

// $conn = DB::getInstance();


// $statement = $conn->prepare("SELECT * FROM usuarios");
// $statement->execute();
// $results = $statement->fetchAll(PDO::FETCH_ASSOC);


require 'View.php';

require 'UserModel.php';
$model = new UserModel();

//1. Get all records
// $results = $model->getAll();


// 2. get a record from the table
$results = $model->getById($_GET['id']);

if (count($results) <= 0) {
    $results = [
        "mensaje" => "No se encontraron datos"
    ];
}

View::returnJSON($results);
