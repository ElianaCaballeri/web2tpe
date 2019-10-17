<?php

    class modelCategoria {

        private $db;

        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=db_saludables;charset=utf8', 'root', '');
        }
        
        public function obtenerCategorias(){
            $query= $this->db->prepare('SELECT * FROM tipo');
            $query-> execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function obtenerUnaCategoria($id_categoria){
            $query=$this->db->prepare('SELECT * FROM tipo WHERE id_tipo=?');
            $query->execute(array($id_categoria));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function agregarCategoria($nombre, $descripcion){
            $query=$this->db->prepare('INSERT INTO tipo(nombre, descripcion) VALUES (?,?)');
            $query->execute([$nombre, $descripcion]);
            //var_dump($query->errorInfo());
        }
    
        public function editarCategoria($nombre, $descripcion, $id_categoria){
            $query=$this->db->prepare('UPDATE tipo SET nombre=?,descripcion=? WHERE id_tipo=?');
            $query->execute(array($nombre, $descripcion, $id_categoria));
        }

        public function eliminarCateg($id_categoria){
            $query= $this->db->prepare('DELETE FROM tipo WHERE id_tipo=?');
            $query->execute([$id_categoria]);

        }

    }