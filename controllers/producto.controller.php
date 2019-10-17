<?php

include_once('models/producto.model.php');
include_once('models/categoria.model.php');
include_once('views/producto.view.php');
include_once('helpers/auth.helper.php');

class ProductoController{
    private $modelProd;
    private $modelCateg;
    private $viewProd;
    private $authHelper;

    public function __construct() {
        $this->modelProd = new ModelProducto();
        $this->modelCateg= new ModelCategoria();
        $this->viewProd = new ProductoView();
        $this->authHelper = new AuthHelper();
    }

    public function mostrarProductos() {
        $categorias=$this->modelCateg->obtenerCategorias();
        $productos = $this->modelProd->obtenerTodosProductos();
        $this->viewProd->verProductos($productos,$categorias);
    }

    public function detalleProd($params=null){
        $id_producto=$params[':ID'];
        $detalleProducto= $this->modelProd->detalleProducto($id_producto);
         $this->viewProd->verDetalleProducto( $detalleProducto);
    }

    public function insertarProd(){
        // barrera para visitantes
        $this->authHelper->verificarLogin();

        $nombre= $_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];
        $categoria=$_POST['categoria'];
       
        if(!empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($stock) && !empty($categoria)){
            $this->modelProd->agregarProducto($nombre, $descripcion, $precio, $stock, $categoria);
            header("Location: " . PRODUCTOS);
        }
        else{
            $this->viewProd->mensaje("Existen campo/s sin completar.");
        }
        
    }

    public function obtenerProductoAmodif($params=null){
        $this->authHelper->verificarLogin();
        
        $id_producto=$params[':ID'];
        $producto=$this->modelProd->detalleProducto($id_producto);
        $categorias=$this->modelCateg->obtenerCategorias();
        $this->viewProd->mostrarFormProd($producto, $categorias);
    }

    public function modificarProd(){  
        $this->authHelper->verificarLogin();

        $id_producto=$_POST['id_producto'];
        $nombre= $_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];
        $categoria=$_POST['categoria'];
        
        if(isset($nombre) && isset($descripcion) && isset($precio) && isset($stock) && isset($categoria)){
            $this->modelProd->modificarProducto($nombre, $descripcion, $precio, $stock,$categoria,$id_producto );
            header ("Location: " . PRODUCTOS);
        }
    }

    public function borrarProd($params = null){
        $this->authHelper->verificarLogin();
        $id_producto= $params[':ID'];
        $this->modelProd->eliminarProducto($id_producto);
        header("Location: ". PRODUCTOS);
    }

}