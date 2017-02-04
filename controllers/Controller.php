<?php
namespace controllers;

use Dwoo_Core;

class Controller {

  public function getView($file, $data = []) {
    $GetView = new Dwoo_Core();
    return $GetView->get('views/'.$file.'.tpl', $data);
  }

}

?>
