<?php

class UserModel{

    private $db;

    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;dbname=db_saludables;charset=utf8', 'root', '');
    }

    public function traerUsuarioPorId($id_usuario){
        $query=$this->db->prepare('SELECT * FROM usuario WHERE id_usuario=?');
        $query->execute(array($id_usuario));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function traerUsuarioPorNombre($nombre_usuario){
        $query=$this->db->prepare('SELECT * FROM usuario WHERE username=?');
        $query->execute(array($nombre_usuario));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    public function existeUsuarioPorNombre($nombre_usuario){
        $query=$this->db->prepare('SELECT * FROM usuario WHERE username=?');
        $query->execute(array($nombre_usuario));
        return count($query->fetchAll(PDO::FETCH_OBJ)) > 0;
    }

    public function obtenerUsuarios(){
        $query=$this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function guardarRegistro($usuario, $clave){
        $query=$this->db->prepare('INSERT INTO usuario(username, password, esAdmin) VALUES(?,?,0)');
        $query->execute([$usuario, $clave]);
        return $this->db->lastInsertId();
    }

    public function borrarUsuario($id_usuario){
        $query=$this->db->prepare('DELETE FROM usuario WHERE id_usuario=?');
        $query->execute([$id_usuario]);
    }

    public function otorgarPermiso($permiso, $id_usuario){
        $query=$this->db->prepare('UPDATE usuario SET esAdmin=? WHERE id_usuario=?');
        $query->execute([$permiso, $id_usuario]);
       
    }
    
}