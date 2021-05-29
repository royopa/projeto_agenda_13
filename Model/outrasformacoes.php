<?php

class OutrasFormacoes
{
    private idOutrasFormacoes;
    private idUsuario;
    private inicio;
    private fim;
    private descricao;

//idOutrasFormacoes
public function setidOutrasFormacoes($idOutrasFormacoes)
{
    $this->idOutrasFormacoes = $idOutrasFormacoes ; 
}

public function getIdOutrasFormacoes()
{
 return $this->idOutrasFormacoes;
}

//idUsuario
public function setIdUsuario($idUsuario)
{
    $this->idUsuario = $idUsuario; 
}

public function getIdUsuario()
{
 return $this->idUsuario;
}

//inicio
public function setInicio ($inicio)
{
    $this->inicio = $inicio; 
}

public function getInicio ()
{
 return $this->inicio;
}

//fim
public function setFim($fim)
{
    $this->fim = $fim; 
}

public function getFim ()
{
 return $this->fim;
}

//descricao
public function setDescricao($descricao)
{
    $this->descricao = $descricao; 
}

public function getDescricao()
{
 return $this->descricao;
}

public function inserirBD()
{
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO outrasformacoes (idoutrasformacoes, inicio, fim, descricao)
            VALUES ('".$this->idoutrasformacoes."','".$this->inicio."','".$this->fim."','".$this->descricao."')";

    if ($conn->query($sql))=== true) {
        $this->id = mysqli_inset_id($conn);
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}

public function excluirBD($id)
{
    require_once 'ConexaoDB.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM outrasformacoes 
            WHERE idoutrasformacoes = '".$id . "';";

    if ($conn->query($sql))=== true) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}

public function listaOutrasFormacoes($idoutrasformacoes)
{
    require_once 'ConexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM outrasformacoes WHERE idoutrasformacoes = '".$idoutrasformacoes . "';";

    $resposta = $conn->query($sql);
        $conn->close();
        return $resposta;
}

}