<?php
namespace controllers;

use Dwoo_Core;

if (!array_key_exists('cart', $_SESSION)) {
  $_SESSION['cart'] = [];
}

if (!array_key_exists('logued', $_SESSION)) {
  $_SESSION['logued'] = false;
  $_SESSION['id'] = 0;
}

class Controller {

  var $mysqli = null;

  public function __construct() {
    $this->connectDb();
  }

  public function getView($file, $data = []) {
    $GetView = new Dwoo_Core();
    return $GetView->get('views/'.$file.'.tpl', $data);
  }

  private function connectDb() {
    $mysqli = new \mysqli("localhost", "root", "jesus", "sellithium");

    if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    } else {
      $this->mysqli = $mysqli;
    }
  }

}

?>
