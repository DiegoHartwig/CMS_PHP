<?php

class adminController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $usu = new Usuarios();
        $usu->verificarLogin();
        $dados = array();

        $this->loadTemplateInAdmin('admin/home', $dados);
    }

    public function login() {

        $dados = array(
            'erro' => ''
        );
        
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            
            $usu = new Usuarios();
            $dados['erro'] = $usu->logar($email, $senha);
        }

        $this->loadView("admin/login", $dados);
    }
    
    public function logout(){
        unset($_SESSION['lgAdmin']);
        header("Location: " . BASE . "admin/login");
        exit;
    }

}
