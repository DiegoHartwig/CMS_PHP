<?php

/*
 * Classe model Comentarios
 *
 * Model Comentarios
 *
 *
 * @package CMS
 * @author Diego Hartwig <hartwig.diego@gmail.com>
 *
 */

class Comentarios extends model {

    public function getComentarios($limit = 0) {
        $array = array();

        $sql = "SELECT * FROM comentarios";
        if ($limit > 0) {
            $sql .= " LIMIT " . $limit;
        }

        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}
