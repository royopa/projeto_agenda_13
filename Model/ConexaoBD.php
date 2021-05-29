<?php

class ConexaoBD
{
    private $pdo;
    private $servername = "localhost";
    private $username = "root";
    private $password = "usbw";
    private $dbname = "projeto_final";

    //public function conectar()
    //{
        //$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        //return $conn;
    //}   

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function conectar()
    {
        if ($this->pdo == null) {
            $this->pdo = new PDO("sqlite:/home/rodrigo/projects/projeto_agenda_13/db/basedados.db");
        }

        return $this->pdo;
    }
}
