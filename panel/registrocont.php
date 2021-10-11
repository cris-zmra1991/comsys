<?php
require '../base.php';
if (!empty($_SESSION['usuario'])) {
  $data = $database->count("user_has_permissions",["AND" => ["user_id" => $_SESSION['id_user'], "perm_id" => 4]]);
  if (!empty($data)) {
    require '../views/registrocont.view.php';
  }
  else {
  require 'e125.php';
  }
}
 ?>
