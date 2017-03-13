<?php
namespace controllers;

class Cart extends Controller {

    public function index() {
      echo $this->getView('cart');
    }

    public function checkout() {
      echo $this->getView('cart_checkout');
    }

}

?>
