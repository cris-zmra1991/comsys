<?php
define('RUTA', 'http://localhost:8030/sigespro/');
require 'config/session_handler.php';
require 'config/medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mssql',
  	'host' => 'localhost',
  	'database' => 'sigespro',
  	'username' => 'sa',
  	'password' => 'sql2019*',
   ]);
} catch (PDOException $e) {
  echo "No se pudo conectar a la Base de Datos";
}
?>
