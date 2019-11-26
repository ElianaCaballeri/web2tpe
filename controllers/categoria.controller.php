<?php

include_once('models/categoria.model.php');
include_once('models/producto.model.php');
include_once('views/categoria.view.php');
include_once('helpers/auth.helper.php');

class CategoriaController{
    private $viewCateg;
    private $modelProd;
    private $modelCateg;
    private $help;

    public function __construct() {
        $this->modelProd = new ModelProducto();
        $this->modelCateg= new ModelCategoria();
        $this->viewCateg = new CategoriaView();
        $this->help= new AuthHelper();
    }

    public function mostrarCategorias(){
        $categorias=$this->modelCateg->obtenerCategorias();
        $this->viewCateg->verCategorias($categorias);
    }

    public function detalleCateg($params=null){
        $id_categoria=$params[':ID'];
        $productosCategoria=$this->modelProd->obtenerProductosCategoria($id_categoria);
        $categoria=$this->modelCateg->obtenerUnaCategoria($id_categoria);
        $this->viewCateg->mostrarProductosCateg($productosCategoria, $categoria);
    }
    public function insertarCateg(){
        $this->help->verificarAdmin();
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $this->modelCateg->agregarCategoria($nombre,$descripcion);
        header("Location: " .  CATEGORIAS);
    }
   
    public function obtenerCategoriaAmodif($params=null){
        $this->help->verificarAdmin();
        $id_categoria=$params[':ID'];
        $categoria=$this->modelCateg->obtenerUnaCategoria($id_categoria);
        $this->viewCateg->mostrarFormCat($categoria);
    }

    public function modificarCateg(){
        $this->help->verificarAdmin();
        $id_categoria=$_POST['id_categoria'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $this->modelCateg->editarCategoria($nombre, $descripcion, $id_categoria);
        header("Location: " . CATEGORIAS);
    }

    public function borrarCategoria($params=null){
        $this->help->verificarAdmin();        
        $id_categoria=$params[':ID'];
        $productos=$this->modelProd->obtenerProductosCategoria($id_categoria);
        if(!empty($productos)){
            //var_dump($productos);
            $this->viewCateg->mostrarMensaje("Para eliminar la categoria debe borrar los productos que pertenecen a ella");
        }
        else{
            $this->modelCateg->eliminarCateg($id_categoria);
        header ('Location: ' . CATEGORIAS);
        }
    }

}