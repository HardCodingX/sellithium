<?php
namespace controllers;

class Cart extends Controller {

    public function index() {
      $cart = $_SESSION['cart'];
      $cart_products = [];
      $total = 0;
      foreach ($this->productsList as $k => $v) {
        if (in_array($v['id'], $cart)) {
          $cart_products[] = $v;
          $total += $v['price'];
        }
      }
      echo $this->getView('cart', compact('cart_products', 'total', 'cart'));
    }

    public function checkout() {
      $cart = $_SESSION['cart'];
      $total = 0;
      foreach ($this->productsList as $k => $v) {
        if (in_array($v['id'], $cart)) {
          $total += $v['price'];
        }
      }
      echo $this->getView('cart_checkout', compact('total'));
    }

    public function restart() {
      $_SESSION['cart'] = [];
      header("LOCATION: /sellithium/products");
    }

}

?>
