<?php

/*
 * Classe model imagens
 *
 * Model Imagens
 * 
 * Responsavel por salvar e listar imagens da galeria
 *
 *
 * @package CMS
 * @author Diego Hartwig <hartwig.diego@gmail.com>
 *
 */

class imagens extends model {

    public function saveImagens() {

        if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {

            $arquivosPermitidos = array('image/jpeg', 'image/jpg', 'image/png');

            if (in_array($_FILES['arquivo']['type'], $arquivosPermitidos)) {

                $nome = md5(time() . rand(0, 999)) . '.jpg';

                move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);
                
                $titulo = '';
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
                    $titulo = addslashes($_POST['titulo']);
                }
                
                $sql = "INSERT INTO imagens SET titulo = '$titulo', url = '$nome'";
                $this->db->query($sql);
            }
        }
    }

    public function getImagens() {
        $array = array();

        $sql = "SELECT * FROM imagens ORDER BY id DESC";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

}
