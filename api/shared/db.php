<?php

if (session_status() === PHP_SESSION_NONE) {
  session_set_cookie_params([
    'path' => '/',
    'sameattr' => 'Lax'
  ]);
  session_start();
}

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

$conn = new mysqli(getenv('servername'), getenv('username'), getenv('password'), getenv('dbname'));

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");