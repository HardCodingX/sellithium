<?php
namespace controllers;

//use controllers\Controller;

class Home extends Controller{

    public function index()
    {
        echo 'home';
    }

    public function test($id)
    {
      echo $this->getView('home', compact('id'));
    }

}

?>
