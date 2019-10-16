<?php
require_once('libs/Smarty.class.php');

class PrincipalView{
    private $smarty;


    public function __construct(){
        $authHelper= new AuthHelper();
        $nombreUsuario= $authHelper->obtenerUsuarioLogueado();

        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('nombreUsuario', $nombreUsuario);
    }
    public function mostrarInicio(){
        $this ->smarty->display('templates/home.tpl');
    }

    public function verProductos($productos,$categorias) {
        // paso las variables a smarty
        $this->smarty->assign('titulo',"Lista de productos");
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categorias', $categorias);
        // renderizo smarty
        $this->smarty->display('templates/productos.tpl');
    }
    public function verProductosCateg($productosCategoria,$categoria){
        $this->smarty->assign('titulo', "Productos de la categoria: ");
        $this->smarty->assign('productosCategoria', $productosCategoria);
        $this->smarty->assign('categoria', $categoria->nombre);
        $this->smarty->display('templates/productosCategoria.tpl');
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
        $this->smarty->display('templates/mensajes.tpl');
    }

    public function verCategorias($categorias){
        $this->smarty->assign('titulo', "Categorias de productos");
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('templates/categorias.tpl');
    }

    public function mostrarProductosCateg($productosCategoria, $categoria){
        $this->smarty->assign('titulo', "Detalle de la categoria: ");
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('productos', $productosCategoria);
        $this->smarty->display('templates/detalleCategoria.tpl');
    }

    public function mostrarFormCat($categoria){
        $this->smarty->assign('titulo', "Modificar la categoria");
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/formularioCategoria.tpl');
    }
    
}