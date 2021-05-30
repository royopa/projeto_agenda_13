<?php

require_once '../Model/Administrador.php';

if (!isset($_SESSION)) {
    session_start();
}


class AdministradorController
{

    public function login($cpf, $senha)
    {
        $administrador = new Administrador();
        $administrador->carregarAdministrador($cpf);

        if ($administrador->getSenha() == $senha) {
            $_SESSION['Administrador'] = serialize($administrador);
            return true;
        }

        return false;
    }
}
