<?php

class AuthHelper{

    public function __construct(){
        if (session_status() != PHP_SESSION_ACTIVE) // si la sesion no esta iniciada
            session_start();
    }

    public function loguear($usuario){
         // la sesion ya esta inciada en el constructor
         $_SESSION['ID_USUARIO'] = $usuario->id_usuario;
         $_SESSION['NOMBRE_USUARIO'] = $usuario->username;
    }

    public function desloguear(){
        session_destroy();
    }

    public function verificarLogin(){
        if (!isset($_SESSION['ID_USUARIO'])){
            header('Location: ' .LOGIN);
            die();
        }
    }

    public function obtenerUsuarioLogueado(){
        if (isset($_SESSION['NOMBRE_USUARIO']))
            return $_SESSION['NOMBRE_USUARIO'];
        else 
            return null;
    }
    
}