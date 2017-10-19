<?php

class adminController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();        

        $this->loadTemplateInAdmin('admin/home', $dados);
    }

}
