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

      $this->mysqli->query("insert into invoices (user_id, createdAt) values (".$_SESSION['id'].", '".date("Y-m-d H:i:s")."')");
      $last_id = $this->mysqli->insert_id;

      foreach ($cart as $k => $v) {
          $this->mysqli->query("insert into invoices_products (invoice_id, product_id) values (".$last_id.", ".$v.")");
      }

      if ($products_total) {
        $total = $products_total->fetch_assoc();
      }

      $_SESSION['cart'] = [];
      echo $this->getView('cart_checkout', ['total' => $total['total']]);
    }

    public function restart() {
      $_SESSION['cart'] = [];
      header("LOCATION: /sellithium/products");
    }

}

?>
