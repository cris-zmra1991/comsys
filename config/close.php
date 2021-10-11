<?php session_start();
require '../base.php';

$database->update("sys_users",["status" => "0"],["username" => $_SESSION['usuario']]);
session_destroy();
header('Location: '.RUTA.'index.php');

 ?>
