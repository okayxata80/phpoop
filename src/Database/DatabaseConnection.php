<?php

namespace Bipinregmi\Demo\Database;

class DatabaseConnection
{
    private $host;
    private $user;
    private $password;
    private $database;
    public $connection;

    public function __construct($host = "localhost", $user = "root", $password = "", $database = "demo")
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connection = mysqli_connect($host, $user, $password, $database);
    }

    public function connection()
    {
        return $this->connection;
    }
}
