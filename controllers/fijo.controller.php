<?php
    include_once('views/fijo.view.php');
    include_once('helpers/auth.helper.php');

class FijoController{

    private $viewFijo;

    public function __construct() {
        $this->viewFijo = new FijoView();
    }

    public function mostrarHome(){
        $this->viewFijo->mostrarInicio();   
    }
}