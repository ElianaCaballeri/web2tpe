<?php

require_once("models/producto.model.php");
require_once("models/categoria.model.php");
require_once("models/login.model.php");
require_once("producto.json.view.php");

class ProductoApiController{

    private $modelProd;
    private $modelCateg;
    private $modelLogin;
    private $jsonView;

    public function __construct(){
        $this->modelProd = new ModelProducto();
        $this->modelCateg = new ModelCategoria();
        $this->modelLogin = new UserModel();
        $this->jsonView = new JSONView();
    }

}