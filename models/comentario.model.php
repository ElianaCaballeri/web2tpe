<?php

class ModelComentario{

   private $db;

   public function __construct(){
       $this->db= new PDO('mysql:host=localhost;dbname=db_saludables;charset=utf8', 'root', '');
    }

    public function agregarComentario($descripcion, $puntaje, $id_producto,$id_usuario){
        $query=$this->db->prepare('INSERT INTO comentario(descripcion, puntaje,id_producto_fk, id_usuario_fk) VALUES(?,?,?,?)');
        $query->execute([$descripcion, $puntaje, $id_producto,$id_usuario]);
        return $this->db->lastInsertId();
    }

    public function obtenerComentariosProductoASC($id_producto){
        $query=$this->db->prepare('SELECT comentario.id_comentario, comentario.descripcion, comentario.puntaje , comentario.id_producto_fk, comentario.id_usuario_fk, usuario.username FROM comentario JOIN usuario ON id_usuario_fk=id_usuario WHERE id_producto_fk=? ORDER BY puntaje ASC');
        // $query=$this->db->prepare('SELECT comentario.*, usuario.username FROM comentario JOIN usuario ON id_usuario_fk=id_usuario WHERE id_producto_fk=?'); es lo mismo que hacer la linea de arriba
        $query->execute([$id_producto]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function obtenerComentariosProductoDESC($id_producto){
        $query=$this->db->prepare('SELECT comentario.id_comentario, comentario.descripcion, comentario.puntaje , comentario.id_producto_fk, comentario.id_usuario_fk, usuario.username FROM comentario JOIN usuario ON id_usuario_fk=id_usuario WHERE id_producto_fk=? ORDER BY puntaje DESC');
        // $query=$this->db->prepare('SELECT comentario.*, usuario.username FROM comentario JOIN usuario ON id_usuario_fk=id_usuario WHERE id_producto_fk=?'); es lo mismo que hacer la linea de arriba
        $query->execute([$id_producto]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function obtenerComentariosUsuario($id_usuario){
        $query=$this->db->prepare('SELECT * FROM comentario WHERE id_usuario_fk=?');
        $query->execute([$id_usuario]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerUnComentario($id_comentario){
        $query=$this->db->prepare('SELECT * FROM comentario WHERE id_comentario=?');
        $query->execute([$id_comentario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function borrarComentario($id_comentario){
        $query=$this->db->prepare('DELETE FROM comentario WHERE id_comentario=?');
        $query->execute([$id_comentario]);
    } 

    public function obtenerPromedioProducto($id_producto){
        $query=$this->db->prepare('SELECT AVG(comentario.puntaje) as promedio FROM comentario WHERE id_producto_fk=?');
        $query->execute([$id_producto]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}