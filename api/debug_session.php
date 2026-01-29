<?php
session_start();
if (!isset($_SESSION['test'])) {
  $_SESSION['test'] = "La sesión funciona: " . date('H:i:s');
  echo "Sesión iniciada. Recarga la página.";
} else {
  echo $_SESSION['test'];
}
?>