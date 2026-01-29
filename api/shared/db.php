<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

$conn = new mysqli(getenv('servername'), getenv('username'), getenv('password'), getenv('dbname'));

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");