<?php

namespace App\Model;

/**
 * OutrasFormacoes
 *
 */
class OutrasFormacoes
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var integer
     *
     */
    private $idUsuario;

    /**
     * @var DateTime
     *
     */
    private $dataInicio;
   
    /**
     * @var DateTime
     *
     */
    private $dataFim;

    /**
     * @var string
     *
     */
    private $descricao;

    /**
     * Get the value of id
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  integer  $id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of idUsuario
     *
     * @return  integer
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @param  integer  $idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of dataInicio
     *
     * @return  DateTime
     */ 
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set the value of dataInicio
     *
     * @param  DateTime  $dataInicio
     *
     * @return  self
     */ 
    public function setDataInicio(DateTime $dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get the value of dataFim
     *
     * @return  DateTime
     */ 
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set the value of dataFim
     *
     * @param  DateTime  $dataFim
     *
     * @return  self
     */ 
    public function setDataFim(DateTime $dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Get the value of descricao
     *
     * @return  string
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @param  string  $descricao
     *
     * @return  self
     */ 
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function inserirBD(): bool
    {
        $con = $this->getConexao();

        $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao) VALUES ('".$this->idUsuario."','".$this->dataInicio."','".$this->dataFim."','".$this->descricao."')";
        
        if ($conn->query($sql) === true) {
            $this->id = mysqli_insert_id($conn);
            //$conn->close();
            return true;
        }
        
        //$conn->close();
        return false;
    }

    public function excluirBD(int $id): bool
    {
        $con = $this->getConexao();
        $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes='".$this->id."'";
        
        if ($conn->query($sql) === true) {
            //$conn->close();
            return true;
        }
        
        //$conn->close();
        return false;

    }

    public function listaFormacoes(int $idUsuario)
    {
        $con = $this->getConexao();

        $sql = "SELECT * FROM outrasformacoes WHERE idusuario='".$this->idUsuario."'";
        $re = $conn->query($sql);
        //$conn->close();
        return $re;
    }

    private function getConexao() 
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoDB();
        $con = $con->conectar();
        if ($con->connect_error) {
            die('Erro na conexão:' . $conn->connect_error);
        }
        
        return $con;
    }
}