<?php
namespace controllers;

class Products extends Controller {

    public function index() {
      echo $this->getView('products');
    }

    public function view($id) {
      echo $this->getView('products_view', compact('id'));
    }

    public function edit($id) {
      echo $this->getView('products_edit', compact('id'));
    }

}

?>
