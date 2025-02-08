<?php

// connect to our database, and execute a query
class Database {
    public $connection;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost;port=3307;dbname=biegapp;charset=utf8mb4";
        
        $this->connection = new PDO($dsn, 'root');
    }


    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }


}