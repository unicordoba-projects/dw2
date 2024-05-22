<?php


require 'models/UserModel.php';
require 'views/View.php';


class UsersController
{

    private $userModel;


    public function __construct()
    {        
        $this->userModel = new UserModel();
    }


    public function list()
    {      
        $data = $this->userModel->getAll();
        View::returnJSON($data);
    }

    public function store()
    {
        echo "Esta es la acción store()";
    }

    // public function read($id)
    // {
        
    // }
    

    public function create()
    {
        
    }
    
    
    
    public function update()
    {
        
    }
    
    public function delete()
    {
        
    }
    
}