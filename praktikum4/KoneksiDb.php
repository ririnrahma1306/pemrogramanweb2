<?php

class KoneksiDb{
    protected $username = 'root';
    protected $password = '';
    protected $host = 'localhost';
    protected $dbName = '';
    protected $connection;

    public function __construct($host, $username, $password, $dbName){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;

        $this->connection = new mysqli($this->host, $this->username,
        $this->password, $this->dbName);
    }

    public function __destruct ()
    {
        $this->connection->close();
    }

}