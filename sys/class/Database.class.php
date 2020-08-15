<?php

class Database
{
    private static $instance = null;
    private $connection;
    private $host = 'localhost';
    private $dbName = 'video_club';
    private $username = 'root';
    private $password = '';

    private function __construct()
    {
        try {
            $pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName, $this->username, $this->password);
            $this->connection = $pdo;
        } catch (Exception $e){
            die("<p class='errorMessage'>Connection Failed</p>");
        }
    }

    public static function getInstance(){
        if(null === self::$instance){
            return self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }
}