<?php

require 'functions.php';

// dd($_SERVER);

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/biegapp/') {
    require 'controllers/index.php';
}

