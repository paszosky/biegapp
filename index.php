<?php

require 'functions.php';
require 'Database.php';

// require 'router.php';
// dd($_SERVER);

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";

// dd($query);

$posts = $db->query($query, [':id' => $id])->fetchAll(PDO::FETCH_ASSOC);



foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}