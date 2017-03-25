<?php
namespace controllers;

class Home extends Controller {

    public function index() {
      $products = $this->mysqli->query("select * from products order by id desc limit 3");
      $productsList = [];
      while ($row = $products->fetch_assoc()) {
        $productsList[] = $row;
      }
      echo $this->getView('home', compact('productsList'));
    }

    public function test($id) {
      echo $this->getView('test', compact('id'));
    }

}

?>
