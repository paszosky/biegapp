<?php

namespace Core;

use PDO;

// connect to our database, and execute a query
class Database {
    public $connection;

    public $statement;

    public function __construct($config, $username = 'root', $password = '') 
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';'); // ta funkcja tworzy mysql:host=localhost;port=3306...
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }


    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }


}