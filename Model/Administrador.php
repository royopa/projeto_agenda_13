<?php

/**
 * Administrador
 *
 */
class Administrador
{
    private $id;
    private $nome;
    private $cpf;
    private $senha;

    public function carregarAdministrador($cpf)
    {
        $con = $this->getConexao();
        $sql = "SELECT * FROM administrador WHERE cpf = ?";
        $stmt = $con->prepare($sql);

        $stmt->execute([$cpf]);
        $row = $stmt->fetch();

        if ($row != null) {
            $this->id = $row['idadministrador'];
            $this->nome = $row['nome'];
            $this->cpf = $row['cpf'];
            $this->senha = $row['senha'];
            return true;
        }

        return false;
    }

    private function getConexao()
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $con = $con->conectar();
        return $con;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
}
