<?php

class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array(
            'comentarios' => array()
        );
        
        $coment = new Comentarios();
        
        $dados['comentarios'] = $coment->getComentarios(2);

        $this->loadTemplate('home', $dados);
    }

}
