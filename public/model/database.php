<?php

class Database
{ 
    private $username = 'dbuser';
    private $dbname = "mysql:host=db;dbname=db";
    private $password = 'user123';
    public $conn = '';

    public function __construct()
    {
         $conn = new PDO($this->dbname, $this->username, $this->password);
         $this->conn = $conn;

         return $conn;
    }
}
