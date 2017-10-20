<?php

class Menu extends model {

    public function getMenu($id = 0) {
        $array = array();

        $sql = "SELECT * FROM menu";
        if ($id > 0) {
            $sql .= " WHERE id = '$id'";
        }

        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            if ($id > 0) {
                $array = $sql->fetch();
            } else {
                $array = $sql->fetchAll();
            }
        }

        return $array;
    }

    public function delete($id) {

        $this->db->query("DELETE FROM menu WHERE id = $id");
    }

}
