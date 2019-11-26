<?php
class ModelImagen{

    private $db;

    public function __construct(){
        $this->db= new PDO('mysql:host=localhost;dbname=db_saludables;charset=utf8', 'root', '');
    }

    public function traerImagenesProducto($id_producto){
        $query=$this->db->prepare('SELECT * FROM imagen WHERE id_producto_fk=?');
        $query->execute([$id_producto]);
        //var_dump($query->errorInfo());
        //die();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function guardarImagen($name, $temporal, $id_producto){
        $ruta="imagenes/" . uniqid().".". strtolower(pathinfo($name, PATHINFO_EXTENSION));
        move_uploaded_file($temporal, $ruta);
        $query= $this->db->prepare('INSERT INTO imagen(ruta, id_producto_fk) VALUES (?,?)');
        $query->execute([$ruta, $id_producto]);
    }

    // public function modificarImagen($name, $temporal, $id_producto, $id_imagen){
    //     $ruta="imagenes/" . uniqid().".". strtolower(pathinfo($name, PATHINFO_EXTENSION));
    //     move_uploaded_file($temporal, $ruta);
    //     $query= $this->db->prepare('UPDATE imagen SET nombre_imagen=?, ruta=?,id_producto_fk=? WHERE id_imagen=?');
    //     $query->execute([$name, $ruta, $id_producto, $id_imagen]);
    // }

    public function borrarImagen($id_imagen){
        $query= $this->db->prepare('DELETE FROM imagen WHERE id_imagen=?');
        $query->execute([$id_imagen]);
    }




}