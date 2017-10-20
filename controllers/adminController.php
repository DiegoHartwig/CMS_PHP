<?php

class adminController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $usu = new Usuarios();
        $usu->verificarLogin();
        $dados = array();

        $p = new Paginas();
        $dados['paginas'] = $p->getPaginas();

        $this->loadTemplateInAdmin('admin/home', $dados);
    }

    public function menus() {
        $usu = new Usuarios();
        $usu->verificarLogin();

        $dados = array();

        $m = new Menu();
        $dados['menus'] = $m->getMenu();

        $this->loadTemplateInAdmin('admin/menus', $dados);
    }

    public function deletarMenu($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $m = new Menu();
        $m->delete($id);

        header("Location: " . BASE . 'admin/menus');
    }
    public function editarMenu($id) {
        $u = new Usuarios();
        $u->verificarLogin();
        
        $dados = array();

        $m = new Menu();
        $dados['menu'] = $m->getMenu($id);

        $this->loadTemplateInAdmin('admin/editarMenu', $dados);
    }

    public function login() {

        $dados = array(
            'erro' => ''
        );

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            $usu = new Usuarios();
            $dados['erro'] = $usu->logar($email, $senha);
        }

        $this->loadView("admin/login", $dados);
    }

    public function logout() {
        unset($_SESSION['lgAdmin']);
        header("Location: " . BASE . "admin/login");
        exit;
    }

}
