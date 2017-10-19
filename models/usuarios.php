<?php

class Usuarios extends model {

    public function verificarLogin() {

        if (!isset($_SESSION['lgAdmin']) || (isset($_SESSION['lgAdmin']) && empty($_SESSION['lgAdmin']) )) {
            header("Location: " . BASE . "admin/login");
            exit;
        }
    }

    public function logar($email, $senha) {

        $retorno = '';

        $sql = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $f = $sql->fetch();

            $_SESSION['lgAdmin'] = $f['id'];

            header("Location: " . BASE . "admin");
        } else {
            $retorno = 'Dados de login incorretos';
        }

        return $retorno;
    }

}
