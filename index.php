<?php

require 'functions.php';

// require 'router.php';
// dd($_SERVER);

// connect to our database

$dsn = "mysql:host=localhost;port=3307;dbname=biegapp;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}