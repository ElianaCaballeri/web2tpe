<?php

include_once('models/login.model.php');
include_once('models/comentario.model.php');
include_once('views/login.view.php');
include_once('helpers/auth.helper.php');

class  LoginController{

    private $view;
    private $model;
    private $modelComent;
    private $help;

    public function __construct(){
        $this->view=new LoginView();
        $this->model= new UserModel();
        $this->modelComent = new ModelComentario();
        $this->help=new AuthHelper();
    }
 
    public function verLogin(){
        $this->view->mostrarLogin();
    }

    public function verRegistro(){
        $this->view->mostrarRegistroLogin();
    }

    public function registrarse(){
        $nombre=$_POST['usuario'];
        $clave=$_POST['clave'];
        if (!empty($nombre)&&!empty($clave)){
            $existe=$this->model->existeUsuarioPorNombre($nombre);
            if ($existe){
                $this->view->mensaje("Este nombre de usuario ya esta registrado.");
            }
            else{
                $hash=password_hash($clave,PASSWORD_DEFAULT);
                $registrar=$this->model->guardarRegistro($nombre, $hash);
                $this->view->mensaje("Te has registrado correctamente.");
            }
        }
        else{
            $this->view->mensaje("exiten campo/s sin completar");
            }
    }
    

    public function verificarUsuario(){
        $nombreUsuario= $_POST['usuario'];
        $clave=$_POST['contraseña'];
        $usuario=$this->model->traerUsuarioPorNombre($nombreUsuario);

        //encontró un usuario y contraseña correctos
        if (!empty($usuario) && password_verify($clave, $usuario->password)) {
            $this->help->loguear($usuario);
            header('Location: categorias');
        }
        else {
            $this->view->mostrarLogin("Login incorrecto.");
        }
    }

    public function cerrarSesion(){
        $this->help->desloguear();
        header('Location: login');
    }

    public function verUsuarios($params=null){
        $this->help->verificarAdmin();
        $usuarios=$this->model->obtenerUsuarios();
        $this->view->listarUsuarios($usuarios);
    }

    public function modificarPermiso($params=null){
        $this->help->verificarAdmin();
        $id_usuario=$params[':ID'];
        $usuario=$this->model->traerUsuarioPorId($id_usuario);
        if (($usuario->esAdmin)==0){
            $this->model->otorgarPermiso($id_usuario);
            $this->view->mensaje("El usuario " . $usuario->username . " ahora tiene permiso de administrador");
        }
        else{
            $this->view->mensaje("El usuario " . $usuario->username . " ya tiene permisos de administrador");
        }
    }

    public function eliminarUsuario($params=null){
        $this->help->verificarAdmin();
        $id_usuario=$params[':ID'];
        $comentarios=$this->modelComent->obtenerComentariosUsuario($id_usuario);
        if (!empty($comentarios)){
          $this->view->mensaje("Debe borraar los comentarios de este usuario antes de eliminarlo.");
        }
        else{
            $this->model->borrarUsuario($id_usuario);
            header('Location: ' . USUARIOS);
        }
    }

}