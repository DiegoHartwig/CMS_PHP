<?php

/*
 * Classe adminController
 *
 * Controller Admin
 *
 *
 * @package CMS
 * @author Diego Hartwig <hartwig.diego@gmail.com>
 *
 */

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

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);

            $m->update($nome, $url, $id);
            header("Location: " . BASE . "admin/menus");
            exit;
        }

        $dados['menu'] = $m->getMenu($id);

        $this->loadTemplateInAdmin('admin/editarMenu', $dados);
    }

    public function addMenu() {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $m = new Menu();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);

            $m->insert($nome, $url);
            header("Location: " . BASE . "admin/menus");
            exit;
        }

        $this->loadTemplateInAdmin('admin/addMenu', $dados);
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

    public function config() {

        $u = new Usuarios();
        $u->verificarLogin();

        if (isset($_POST['site_title']) && !empty($_POST['site_title'])) {

            $site_title = addslashes($_POST['site_title']);
            $home_welcome = addslashes($_POST['home_welcome']);
            $site_template = addslashes($_POST['site_template']);

            $c = new Config();
            $c->setPropriedade('site_title', $site_title);
            $c->setPropriedade('home_welcome', $home_welcome);
            $c->setPropriedade('site_template', $site_template);

            header("Location: " . BASE . "admin/config");
            exit;
        }

        $dados = array();

        $this->loadTemplateInAdmin('admin/config', $dados);
    }

    public function excluirPagina($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $p = new Paginas();
        $p->delete($id);

        header("Location: " . BASE . "admin");
    }

    public function editarPagina($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $p = new Paginas();

        if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $url = addslashes($_POST['url']);
            $corpo = addslashes($_POST['corpo']);

            $p->update($titulo, $url, $corpo, $id);
            header("Location: " . BASE . "admin");
            exit;
        }
        $dados['pagina'] = $p->getPaginaById($id);

        $this->loadTemplateInAdmin('admin/editarPagina', $dados);
    }

    public function addPagina() {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $p = new Paginas();

        if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $url = addslashes($_POST['url']);
            $corpo = addslashes($_POST['corpo']);
            $p->insert($titulo, $url, $corpo);

            if (isset($_POST['criarMenu']) && !empty($_POST['criarMenu'])) {
                $m = new Menu();
                $m->insert($titulo, $url);
            }


            header("Location: " . BASE . "admin");
            exit;
        }

        $this->loadTemplateInAdmin('admin/addPagina', $dados);
    }

}
