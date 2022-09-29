<?php
//Implementar la conexión de la base de datos
include_once 'libs/imoodel.php';
class Model{

    function __construct(){
        $this->db = new Database();
    }
//Facilitan el uso de función de modelo 
    function query($query){
        return $this->db->connect()->query($query);
    }

    function prepare($query){
        return $this->db->connect()->prepare($query);
    }

}
?>