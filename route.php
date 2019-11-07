<?php

require_once("Router.php");
require_once("controllers/login.controller.php");
require_once("controllers/fijo.controller.php");
require_once("controllers/categoria.controller.php");
require_once("controllers/producto.controller.php");

//constantes ruteo
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGIN", BASE_URL . 'login');
define("PRODUCTOS" , BASE_URL . 'productos');
define("CATEGORIAS" , BASE_URL . 'categorias');

$r= new Router();

$r->addRoute("login", "GET", "LoginController", "verLogin");
$r->addRoute("verificar", "POST", "LoginController", "verificarUsuario");
$r->addRoute("salir", "GET", "LoginController", "cerrarSesion");
////////////////////////////////////////////////////////////////////////////////////////////////
$r->addRoute("home", "GET", "FijoController", "mostrarHome");
////////////////////////////////////////////////////////////////////////////////////////////////
$r->addRoute("categorias" , "GET", "CategoriaController", "mostrarCategorias");
$r->addRoute("detalleCategoria/:ID" , "GET", "CategoriaController", "detalleCateg");
$r->addRoute("nuevaCategoria", "POST", "CategoriaController", "insertarCateg");
$r->addRoute("editarCategoria/:ID", "GET", "CategoriaController", "obtenerCategoriaAmodif");
$r->addRoute("editarCategoria", "POST", "CategoriaController", "modificarCateg");
$r->addRoute("eliminarCategoria/:ID" , "GET", "CategoriaController", "borrarCategoria");
////////////////////////////////////////////////////////////////////////////////////////////////
$r->addRoute("productos", "GET", "ProductoController", "mostrarProductos");
$r->addRoute("detalleProducto/:ID", "GET", "ProductoController", "detalleProd");
$r->addRoute("nuevoProducto", "POST", "ProductoController", "insertarProd");
$r->addRoute("editarProducto/:ID", "GET", "ProductoController", "obtenerProductoAmodif");
$r->addRoute("editarProducto", "POST", "ProductoController", "modificarProd");
$r->addRoute("eliminarProducto/:ID", "GET", "ProductoController","borrarProd");

//ruta que va a mostrar por defecto es el home
$r->setDefaultRoute("FijoController", "mostrarHome");

$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>    