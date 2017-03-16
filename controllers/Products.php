<?php
namespace controllers;

class Products extends Controller {

    var $productsList = [
      [id => 1, name => 'lap acer', price => 8000.00, stocks => 12],
      [id => 2, name => 'hp printer', price => 1500.99, stocks => 20],
      [id => 3, name => 'web cam', price => 524.20, stocks => 9]
    ];

    public function index() {
      echo $this->getView('products', ['productsList' => $this->productsList]);
    }

    public function view($id) {
      echo $this->getView('products_view', compact('id'));
    }

    public function edit($id) {
      echo $this->getView('products_edit', compact('id'));
    }

}

?>
