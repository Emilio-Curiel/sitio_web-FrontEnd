lines (11 sloc)  276 Bytes
   
<?php

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'pagina_emilio';

try {
  $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>