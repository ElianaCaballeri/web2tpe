<?php

require_once('libs/Smarty.class.php');

class FijoView{

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

    public function mostrarInicio(){
        $this ->smarty->display('templates/home.tpl');
    }
    
}
