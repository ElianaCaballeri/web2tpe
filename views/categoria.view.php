<?php
require_once('libs/Smarty.class.php');

class CategoriaView{

    private $smarty;


    public function __construct(){
        $authHelper= new AuthHelper();
        $nombreUsuario= $authHelper->obtenerUsuarioLogueado();

        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('nombreUsuario', $nombreUsuario);
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
    public function mostrarMensaje($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/mensajes.tpl');
    }
}