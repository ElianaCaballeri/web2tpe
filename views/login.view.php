<?php

require_once('libs/Smarty.class.php');

class LoginView{
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

    public function mostrarLogin($error = null){
        $this->smarty->assign('titulo', "Iniciar Sesion");
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/iniciarSesion.tpl');
    }

    public function mostrarRegistroLogin($error = null){
        $this->smarty->assign('titulo', "Registrarse");
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/registrarse.tpl');
    }

    public function listarUsuarios($usuarios){
        $this->smarty->assign('titulo', "Listado de usuarios:");
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuarios.tpl');
    }
    
    // public function mostrarFormUsuario($id_usuario){
    //     $this->smarty->assign('titulo', "Modificar permiso:");
    //     $this->smarty->assign('id_usuario', $id_usuario);
    //     $this->smarty->display('templates/formularioUsuario.tpl');
    // }

    public function mensaje($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/mensajes.tpl');
    }

    
}