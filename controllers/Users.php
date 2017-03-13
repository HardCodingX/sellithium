<?php
namespace controllers;

class Users extends Controller {

    public function index() {
      echo $this->getView('user');
    }

    public function login() {
      echo $this->getView('user_login');
    }

    public function register() {
      echo $this->getView('user_register');
    }

}

?>
