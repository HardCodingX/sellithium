<?php
namespace controllers;

class Home extends Controller {

    public function index() {
        echo 'home';
    }

    public function test($id) {
      echo $this->getView('home', compact('id'));
    }

}

?>
