<?php

include_once('models/producto.model.php');
include_once('models/categoria.model.php');
include_once('models/imagen.model.php');
include_once('models/comentario.model.php');
include_once('views/producto.view.php');
include_once('helpers/auth.helper.php');

class ProductoController{
    private $modelProd;
    private $modelCateg;
    private $modelImagen;
    private $modelComent;
    private $viewProd;
    private $help;

    public function __construct() {
        $this->modelProd = new ModelProducto();
        $this->modelCateg= new ModelCategoria();
        $this->modelImagen=new ModelImagen();
        $this->modelComent=new ModelComentario();
        $this->viewProd = new ProductoView();
        $this->help = new AuthHelper();
    }

    public function mostrarProductos() {
        $categorias=$this->modelCateg->obtenerCategorias();
        $productos = $this->modelProd->obtenerTodosProductos();
        $this->viewProd->verProductos($productos,$categorias);
    }

    public function detalleProd($params=null){
        $id_producto=$params[':ID'];
        if (isset($_SESSION["ID_USUARIO"])){
            $id_usuario=$_SESSION["ID_USUARIO"];
        }
        else{
            $id_usuario=null;
        } 
        $detalleProducto= $this->modelProd->detalleProducto($id_producto);
        $imagenes= $this->modelImagen->traerImagenesProducto($id_producto);
        $this->viewProd->verDetalleProducto($detalleProducto,$imagenes,$id_usuario);
        
      
        }
       
    

    public function insertarProd(){
        $this->help->verificarAdmin();
        $nombre= $_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];
        $categoria=$_POST['categoria'];
        $imagenes=$_FILES;

        if(!empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($stock) && !empty($categoria)){
            $id_producto = $this->modelProd->agregarProducto($nombre, $descripcion, $precio, $stock, $categoria);
            foreach ($imagenes['imagesToUpload']['tmp_name'] as $key => $tmp_name) {
                if($_FILES['imagesToUpload']['type'][$key] == "image/jpg" || $_FILES['imagesToUpload']['type'][$key] == "image/jpeg" || $_FILES['imagesToUpload']['type'][$key]== "image/png" ) {
                    $name=$_FILES["imagesToUpload"]["name"][$key];
                    $temporal=$tmp_name;
                    $this->modelImagen->guardarImagen($name,$temporal,$id_producto);
                }
            }
            header("Location: " . PRODUCTOS);
        }
        else{
            $this->viewProd->mensaje("Existen campo/s sin completar.");
        }
    }

    public function obtenerProductoAmodif($params=null){
        $this->help->verificarAdmin();
        $id_producto=$params[':ID'];
        $producto=$this->modelProd->detalleProducto($id_producto);
        $categorias=$this->modelCateg->obtenerCategorias();
        $imagenes=$this->modelImagen->traerImagenesProducto($id_producto);
        $this->viewProd->mostrarFormProd($producto, $categorias, $imagenes);
    }

    public function modificarProd(){  
        $this->help->verificarAdmin();
        $id_producto=$_POST['id_producto'];
        $nombre= $_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];
        $categoria=$_POST['categoria'];
        $imagenes=$_FILES;
        
        if(isset($nombre) && isset($descripcion) && isset($precio) && isset($stock) && isset($categoria)){
            $this->modelProd->modificarProducto($nombre, $descripcion, $precio, $stock,$categoria,$id_producto );
            foreach ($imagenes['imagesToUpload']['tmp_name'] as $key => $tmp_name) {
                if($_FILES['imagesToUpload']['type'][$key] == "image/jpg" || $_FILES['imagesToUpload']['type'][$key] == "image/jpeg" || $_FILES['imagesToUpload']['type'][$key]== "image/png" ) {
                    $name=$_FILES["imagesToUpload"]["name"][$key];
                    $temporal=$tmp_name;
                    $this->modelImagen->guardarImagen($name,$temporal,$id_producto);
                }
            }
            header ("Location: " . PRODUCTOS);
        }
    }

    public function borrarProd($params = null){
        $this->help->verificarAdmin();
        $id_producto= $params[':ID'];
        $imagenes=$this->modelImagen->traerImagenesProducto($id_producto);
        if (!empty($imagenes)){
            $this->viewProd->mensaje("Debe eliminar las imagenes para poder eliminar un producto");
        }
        else{
            $this->modelProd->eliminarProducto($id_producto);
            header("Location: ". PRODUCTOS);
        }
    }

    public function borrarImagen($params=null){
        $this->help->verificarAdmin();
        $id_imagen=$params[':ID'];
        $this->modelImagen->borrarImagen($id_imagen);
        header("Location: " . PRODUCTOS);
    }
}