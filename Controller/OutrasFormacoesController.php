<?php

require_once '../Model/OutrasFormacoes.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


class OutrasFormacoesController 
{
    public function inserir($inicio, $fim, $descricao, $idusuario)
    {
        $formacao = new OutrasFormacoes();
        $formacao->setDataInicio($inicio);
        $formacao->setDataFim($fim);
        $formacao->setDescricao($descricao); 
        $formacao->setIdUsuario($idusuario);    
        $r = $formacao->inserirBD();
   
        return $r;     
    }

    public function remover($id)
    {
        $formacao = new OutrasFormacoes();
        $r = $formacao->excluirBD($id);
        return $r;     
    }

    public function gerarLista($idusuario)
    {
        $formacao = new OutrasFormacoes();
        return $results = $formacao->listaFormacoes($idusuario);
    }
}