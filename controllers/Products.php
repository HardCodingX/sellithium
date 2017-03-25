<?php
namespace controllers;

class Products extends Controller {

    public function index() {
      $products = $this->mysqli->query("select * from products");
      $productsList = [];
      while ($row = $products->fetch_assoc()) {
        $productsList[] = $row;
      }
      echo $this->getView('products', compact('productsList'));
    }

    public function view($id) {
      $products = $this->mysqli->query("select * from products where id = ".$id);
      $product = $products->fetch_assoc();
      echo $this->getView('products_view', compact('product'));
    }

    public function cart($id) {
      $_SESSION['cart'][] = $id;
      $this->view($id);
    }

    private function filter_product($id) {
      $product = [];
      foreach ($this->productsList as $k => $v) {
        if ($v['id'] == $id) {
          $product = $v;
        }
      }
      return $product;
    }

}

?>
