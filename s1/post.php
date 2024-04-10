<?php

// print_r($_POST);


// Invetigación....
// JSON

// CRUD 4 tablas
// ====================
// POST insertar
// GET obtener
// DELETE eliminar
// PUT actualizar

header('Content-type:application/json;charset=utf-8');
echo json_encode($_POST);
