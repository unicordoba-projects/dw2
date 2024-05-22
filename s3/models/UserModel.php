<?php

require 'DB.php';

class UserModel
{
    private $conn;

    private $tabla = 'core.usuarios';

    private $firstName;
    private $lastName;
    private $email;
    private $identification;

    public function __construct()
    {
        $this->conn = DB::getInstance();
    }

    public function getAll()
    {
        $query = 'SELECT * FROM ' . $this->tabla;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $query = 'SELECT * FROM ' . $this->tabla . ' WHERE id = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByIdentification($id)
    {
        $query = 'SELECT * FROM ' . $this->tabla . ' WHERE identification = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
