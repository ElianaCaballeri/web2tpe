<?php
require_once("models/comentario.model.php");
require_once("models/login.model.php");
require_once("comentario.json.view.php");
require_once("helpers/auth.helper.php");

class ComentarioController{
    private $modelComent;
    private $modelLogin;
    private $jsonView;
    private $data;
    private $help;

    public function __construct(){
        $this->modelComent= new ModelComentario();
        $this->modelLogin= new UserModel();
        $this->jsonView= new JSONView();
        $this->data=file_get_contents("php://input");
        
        $this->help= new AuthHelper();
        $nombreUsuario= $this->help->obtenerUsuarioLogueado();
        //$this->smarty->assign('nombreUsuario', $nombreUsuario);
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function comentar($params=null){
        $this->help->verificarLogin();

        $body=$this->getData();
        $descripcion=$body->descripcion;
        $puntaje=$body->puntaje;
        $id_producto=$body->id_producto;
        $id_usuario=$body->id_usuario;

        if (!empty($descripcion) && !empty($puntaje)){
            $comentario=$this->modelComent->agregarComentario($descripcion, $puntaje, $id_producto, $id_usuario);
            if (isset($comentario)){
                $this->jsonView->response($comentario, 200);
            }
            else{
                $this->jsonView->response("No se agrego ningun comentario.", 500);
            } 
        }
        else{
            $this->jsonView->response("Faltan agregar datos", 500);
        }  
    }

    public function verComentariosProducto($params=null){
        $id_producto = $_GET['id_producto'];
        $comentarios=$this->modelComent->obtenerComentariosProducto($id_producto);
        $promedio=$this->modelComent->obtenerPuntajeProducto($id_producto);
        $json=array('comentarios'=> $comentarios,
                'promedio'=> $promedio->promedio);
        $this->jsonView->response($json, 200);
    }

    public function eliminarComentario($params=null){
        $this->help->verificarAdmin();
        $id_comentario=$params[':ID'];
        $comentario=$this->modelComent->obtenerUnComentario($id_comentario);
        if (isset($comentario)){
            $this->modelComent->borrarComentario($id_comentario);
            $this->jsonView->response("El comentario fue borrado con exito", 200);
        }
        else{
            $this->jsonView->response("No existe un comentario para borrar", 404);
        }
    }
}


