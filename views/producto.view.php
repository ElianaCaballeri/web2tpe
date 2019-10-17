<?php

require_once('libs/Smarty.class.php');

class ProductoView{

    private $smarty;

    public function __construct(){
        $authHelper = new AuthHelper();
        $nombreUsuario = $authHelper->obtenerUsuarioLogueado();

        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('nombreUsuario', $nombreUsuario);
    }

    public function verProductos($productos,$categorias) {
        $this->smarty->assign('titulo',"Lista de productos");
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/productos.tpl');
    }
    
    public function verDetalleProducto($detalleProducto){
        $this->smarty->assign('titulo', "Detalle del producto");
        $this->smarty->assign('producto',  $detalleProducto);
        $this->smarty->display('templates/detalleProducto.tpl');
    }
    
    public function mostrarFormProd($producto , $categorias){
        $this->smarty->assign('titulo', "Modificar el producto");
        $this->smarty->assign('producto',  $producto);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/formularioProducto.tpl');
    }

    public function mensaje($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/mensajes.tpl');
    }

}