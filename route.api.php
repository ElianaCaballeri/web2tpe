<?php
require_once("Router.php");
require_once("api/comentario.api.controller.php");


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r= new Router();

$r->addRoute("comentarios", "POST", "ComentarioController", "comentar");
$r->addRoute("comentarios", "GET", "ComentarioController", "verComentariosProducto"); //endpoint API/comentarios?id_producto=<ID>
$r->addRoute("comentarios/:ID", "DELETE", "ComentarioController", "eliminarComentario");


$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 