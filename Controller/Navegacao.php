<?php
if (!isset($_SESSION)) {
    session_start();
}    
require_once '../Controller/UsuarioController.php';
$uController = new UsuarioController();

if($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"],
$_POST['txtSenha']))
{
    include_once '../View/cadastroRealizado.php';
}
else
{
    include_once '../View/cadastroNaoRealizado.php';
}


if(isset($_POST["btnPrimeiroAcesso"]))
{
    include_once '../View/primeiroAcesso.php';
}
else{
    if(isset($_POST["btnCadastrar"]))
    {
        require_once '../Controller/UsuarioController.php';
        $uController = new UsuarioController();
        
        if($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"],
        $_POST['txtSenha']))
        {
            include_once '../View/cadastroRealizado.php';
        }
        else
        {
            include_once '../View/cadastroNaoRealizado.php';
        }
    }
    else{
        if(isset($_POST["btnCadRealizado"]))
        {
            include_once '../View/principal.php';
        }
        else{
            if(isset($_POST["btnCadNRealizado"]))
            {
                include_once '../View/primeiroAcesso.php';
            }
            else
            {
                include_once 'View/login.php';
            }
        }
    }
}


if(isset($_POST["btnAtualizar"]))
 {
 require_once '../Controller/UsuarioController.php';

 $uController = new UsuarioController();

 if($uController->atualizar($_POST["txtID"], $_POST["txtNome"],
$_POST["txtCPF"], $_POST["txtEmail"],
 date('Y-m-d', strtotime($_POST['txtData']))))
 {
 include_once '../View/atualizacaoRealizada.php';
 }
else
{
 include_once '../View/operacaoNaoRealizada.php';
 }

 }