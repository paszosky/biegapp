<?php

require 'functions.php';

// dd($_SERVER);

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/biegapp/') {
    require 'controllers/index.php';
} else if ($uri === '/biegapp/about') {
    require 'controllers/about.php';
} else if ($uri === '/biegapp/contact') {
    require 'controllers/contact.php';
}

