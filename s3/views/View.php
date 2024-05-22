<?php

class View
{
    public static function returnJSON($data)
    {
        header('Content-type:application/json;charset=utf-8');
        echo json_encode($data);
    }
}
