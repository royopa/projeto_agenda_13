<?php

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
    public function setDataInicio($dataInicio)
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
    public function setDataFim($dataFim)
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
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function inserirBD(): bool
    {
        $con = $this->getConexao();
        $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao) VALUES (?,?,?,?)";
        $stmt= $con->prepare($sql);
        $stmt->execute([$this->idUsuario, $this->dataInicio, $this->dataFim, $this->descricao]);
        return true;
    }

    public function excluirBD($id): bool
    {
        $con = $this->getConexao();
        $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes=?";
        $stmt= $con->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }

    public function listaFormacoes($idUsuario)
    {
        $conn = $this->getConexao();
        $sql = "SELECT * FROM outrasformacoes WHERE idusuario='".$idUsuario."'";
        $data = $conn->query($sql)->fetchAll();
        return $data;
    }

    private function getConexao() 
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $con = $con->conectar();
        return $con;
    }
}