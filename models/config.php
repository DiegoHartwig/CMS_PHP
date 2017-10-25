<?php

/*
 * Classe model config
 *
 * Model Config
 *
 *
 * @package CMS
 * @author Diego Hartwig <hartwig.diego@gmail.com>
 *
 */

class Config extends model {

    public function getConfig() {
        $array = array();

        $sql = "SELECT * FROM config";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $c) {
                $array[$c['nome']] = $c['valor'];
            }
            return $array;
        }
    }

    public function setPropriedade($nome, $valor) {

        $this->db->query("UPDATE config SET valor = '$valor' WHERE nome = '$nome'");
    }

}
