<?php

class ModelProducto {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_saludables;charset=utf8', 'root', '');
    }

    public function obtenerTodosProductos() {
        $query = $this->db->prepare('SELECT producto.id_producto, producto.nombre, producto.descripcion,producto.precio, producto.stock, tipo.nombre AS categoria FROM producto JOIN tipo ON id_tipo_fk=id_tipo ');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function agregarProducto($nombre, $descripcion, $precio, $stock, $categoria){
        $query =$this->db->prepare('INSERT INTO producto(nombre,descripcion,precio,stock,id_tipo_fk) VALUES(?,?,?,?,?)');
        $query->execute([$nombre, $descripcion ,$precio, $stock, $categoria]);
        //var_dump($query->errorInfo());
        //return $query->lastInsertId();
        return $this->db->lastInsertId();
    }

    public function detalleProducto($id_producto){
        $query=$this->db->prepare('SELECT id_producto, producto.nombre AS nombre, producto.descripcion AS descripcion, precio, stock, id_tipo_fk,  tipo.nombre AS categoria FROM producto JOIN tipo on  id_tipo_fk = id_tipo WHERE id_producto=?');
        $query->execute(array($id_producto));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function modificarProducto($nombre, $descripcion, $precio ,$stock,$categoria,$id_producto){
        $query =$this->db->prepare('UPDATE producto SET nombre=?, descripcion=?, precio=?, stock=?, id_tipo_fk=?  WHERE id_producto=?');
        $query->execute(array($nombre, $descripcion, $precio ,$stock, $categoria, $id_producto));
        //var_dump($query->errorInfo());
    }

    public function eliminarProducto($id_producto){
       $query=$this->db->prepare('DELETE FROM producto WHERE id_producto=?');
       $query->execute([$id_producto]);
    }

    public function obtenerProductosCategoria($id_categoria){
        //busca todos los campos de los productos de una categoria determinada
        $query=$this->db->prepare('SELECT producto.nombre AS producto FROM producto JOIN tipo ON id_tipo_fk=id_tipo WHERE id_tipo_fk=?');
        $query->execute([$id_categoria]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
}