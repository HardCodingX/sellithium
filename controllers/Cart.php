<?php
namespace controllers;

class Cart extends Controller {

    public function index() {
      $cart = $_SESSION['cart'];
      $cart_products = [];
      $total = 0;
      $products = $this->mysqli->query("select * from products where id in (".implode(",", $cart).")");
      if ($products) {
        while ($row = $products->fetch_assoc()) {
          $cart_products[] = $row;
          $total += $row['price'];
        }
      }
      echo $this->getView('cart', compact('cart_products', 'total', 'cart'));
    }

    public function checkout() {
      $cart = $_SESSION['cart'];
      $total = 0;
      $products_total = $this->mysqli->query("select sum(price) as total from products where id in (".implode(",", $cart).")");
      if ($products_total) {
        $total = $products_total->fetch_assoc();
      }
      echo $this->getView('cart_checkout', ['total' => $total['total']]);
    }

    public function restart() {
      $_SESSION['cart'] = [];
      header("LOCATION: /sellithium/products");
    }

}

?>
