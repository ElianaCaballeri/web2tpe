<?php
include_once('models/login.model.php');
include_once('views/login.view.php');
include_once('helpers/auth.helper.php');
class  LoginController{

    private $view;
    private $model;
    private $help;

    public function __construct(){
        $this->view=new LoginView();
        $this->model= new UserModel();
        $this->help= new AuthHelper();
        }
 
    public function verLogin(){
        $this->view->mostrarLogin();
    }
    
    public function verificarUsuario(){
        $nombreUsuario=$_POST['usuario'];
        $clave=$_POST['contraseña'];

        $usuario=$this->model->traerUsuario($nombreUsuario);
      
        if(!empty($usuario) && password_verify($clave, $usuario->password)){
            $this->help->loguear($usuario);
            header('Location: categorias'     );
        }
        else{
            $this->view->mostrarLogin("Login incorrecto.");
        }
    }
    public function cerrarSesion(){
        $this->help->desloguear();
        header("Location: login");
    }


}