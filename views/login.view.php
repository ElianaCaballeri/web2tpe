<?php

require_once('libs/Smarty.class.php');

class LoginView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    public function mostrarLogin($error = null){
        $this->smarty->assign('titulo', "Iniciar Sesion");
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/iniciarSesion.tpl');
    }
    
}