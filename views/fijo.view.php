<?php

require_once('libs/Smarty.class.php');

class FijoView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    public function mostrarInicio(){
        $this ->smarty->display('templates/home.tpl');
    }
    
}
