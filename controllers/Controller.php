<?php
namespace controllers;

use Dwoo_Core;

if (!array_key_exists('cart', $_SESSION)) {
  $_SESSION['cart'] = [];
}

if (!array_key_exists('logued', $_SESSION)) {
  $_SESSION['logued'] = false;
}

class Controller {

  var $productsList = [
    [id => 1, name => 'lap acer', price => 8000.00, stocks => 12],
    [id => 2, name => 'hp printer', price => 1500.99, stocks => 20],
    [id => 3, name => 'Keybord', price => 245.26, stocks => 9],
    [id => 4, name => 'Mouse', price => 120.01, stocks => 42],
    [id => 5, name => 'Scanner', price => 600.50, stocks => 30],
    [id => 6, name => 'Portable Hard Drive', price => 900.40, stocks => 25]
  ];

  public function getView($file, $data = []) {
    $GetView = new Dwoo_Core();
    return $GetView->get('views/'.$file.'.tpl', $data);
  }

}

?>
