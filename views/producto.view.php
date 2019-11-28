<?php

require_once('libs/Smarty.class.php');
include_once('helpers/auth.helper.php');

class ProductoView{
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        
        $authHelper = new AuthHelper();
        $nombreUsuario= $authHelper->obtenerUsuarioLogueado();
        $this->smarty->assign('nombreUsuario', $nombreUsuario);
        $esAdmin=$authHelper->verificarAdmin();
        $this->smarty->assign('esAdmin', $esAdmin);
    }

    public function verProductos($productos,$categorias) {
        $this->smarty->assign('titulo',"Lista de productos");
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/productos.tpl');
    }
    
    public function verDetalleProducto($detalleProducto,$imagenes,$id_usuario){
        $this->smarty->assign('titulo', "Detalle del producto");
        $this->smarty->assign('producto',  $detalleProducto);
        $this->smarty->assign('imagenes', $imagenes);
        $this->smarty->assign('id_usuario', $id_usuario);
        $this->smarty->display('templates/detalleProducto.tpl');
    }
    
    public function mostrarFormProd($producto , $categorias, $imagenes){
        $this->smarty->assign('titulo', "Modificar el producto");
        $this->smarty->assign('producto',  $producto);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('imagenes',$imagenes);
        $this->smarty->display('templates/formularioProducto.tpl');
    }

    public function mensaje($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/mensajes.tpl');
    }

}