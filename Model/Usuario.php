<?php

class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;


    //ID
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }

    //nome
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    //cpf
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getCPF()
    {
        return $this->cpf;
    }

    //Email
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    //Data de nascimento
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    // Senha
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }

    //Métodos Banco de Dados
    public function inserirBD()
    {
        $con = $this->getConexao();
        $sql = "INSERT INTO usuario (nome, cpf, email, senha) VALUES (?,?,?,?)";
        $stmt = $con->prepare($sql);
        return $stmt->execute([$this->nome, $this->cpf, $this->email, $this->senha]);
    }

    public function carregarUsuario($cpf)
    {
        $con = $this->getConexao();
        $sql = "SELECT * FROM usuario WHERE cpf = ?";
        $stmt = $con->prepare($sql);

        $stmt->execute([$cpf]);
        $row = $stmt->fetch();

        if ($row != null) {
            $this->id = $row['idusuario'];
            $this->nome = $row['nome'];
            $this->email = $row['email'];
            $this->cpf = $row['cpf'];
            $this->dataNascimento = $row['dataNascimento'];
            $this->senha = $row['senha'];
            return true;
        }

        return false;
    }

    public function showUsuario($id)
    {
        $con = $this->getConexao();
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $stmt = $con->prepare($sql);

        $stmt->execute([$id]);
        $row = $stmt->fetch();

        if ($row != null) {
            $this->id = $row['idusuario'];
            $this->nome = $row['nome'];
            $this->email = $row['email'];
            $this->cpf = $row['cpf'];
            $this->dataNascimento = $row['dataNascimento'];
            $this->senha = $row['senha'];
            return $this;
        }

        return null;
    }

    public function atualizarBD()
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "UPDATE usuario SET nome = '" . $this->nome . "', cpf = '" . $this->cpf . "', dataNascimento = '" . $this->dataNascimento . "',
        email='" . $this->email . "'  WHERE idusuario ='" . $this->id . "'";
        if ($conn->query($sql) === TRUE) {
            //$conn->close();
            return TRUE;
        } else {
            //$conn->close();
            return FALSE;
        }
    }

    private function getConexao()
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $con = $con->conectar();
        return $con;
    }

    public function listaCadastrados()
    {
        $conn = $this->getConexao();
        $sql = "SELECT * FROM usuario";
        $data = $conn->query($sql)->fetchAll();
        return $data;
    }
}
