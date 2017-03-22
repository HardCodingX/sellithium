<?php
namespace controllers;

class Products extends Controller {

    public function index() {
      echo $this->getView('products', ['productsList' => $this->productsList]);
    }

    public function view($id) {
      $product = $this->filter_product($id);
      echo $this->getView('products_view', compact('product'));
    }

    public function edit($id) {
      echo $this->getView('products_edit', compact('id'));
    }

    public function cart($id) {
      $_SESSION['cart'][] = $id;
      $product = $this->filter_product($id);
      echo $this->getView('products_view', compact('product'));
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
