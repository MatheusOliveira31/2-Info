<?php

namespace Controller; //sobrenome da classe

use Model\UsuarioModel;
use Model\VO\UsuarioVO;

final class LoginController extends Controller {

        public function __construct()
        {
            parent::__construct(false);
        }
    public function login(){
        $this -> loadView("login");
    }
    public function fazerlogin(){
        $vo = new UsuarioVO(0,"",$_POST["login"],$_POST["senha"]);
        $model = new UsuarioModel();

        $sucess = $model -> doLogin($vo);

        if($sucess){
            $this ->redirect("disciplinas.php");
        }else{
            $this->redirect("login.php");
        }
    }

    public function logout(){
        $model = new UsuarioModel();
        $model -> logout();
        $this -> redirect("login.php");
    }
}

