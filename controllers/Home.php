<?php
namespace controllers;

class Home extends Controller {

    public function index() {
      echo $this->getView('home');
    }

    public function test($id) {
      echo $this->getView('test', compact('id'));
    }

}

?>
