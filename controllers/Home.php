<?php
namespace controllers;

class Home extends Controller {

    public function index() {
      $products = array_slice($this->productsList, 0, 3);
      echo $this->getView('home', compact('products'));
    }

    public function test($id) {
      echo $this->getView('test', compact('id'));
    }

}

?>
