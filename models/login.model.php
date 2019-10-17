<?php

class UserModel{

    private $db;

    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;dbname=db_saludables;charset=utf8', 'root', '');
    }

    public function traerUsuario($username){
        $query=$this->db->prepare('SELECT * FROM usuario WHERE username=?');
        $query->execute(array($username));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
}