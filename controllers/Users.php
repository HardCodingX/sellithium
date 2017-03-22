<?php
namespace controllers;

class Users extends Controller {

    public function index() {
      echo $this->getView('user');
    }

    public function login() {
      if ($_SESSION['logued'] == true) {
        header("LOCATION: /sellithium/");
      }
      echo $this->getView('user_login');
    }

    public function try_login() {
      $user = $_POST['user'];
      $password = $_POST['password'];
      if ($user == 'test' && $password == 'test') {
        $_SESSION['logued'] = true;
        header("LOCATION: /sellithium/");
      }
      echo $this->getView('user_login');
    }

    public function logout() {
      $_SESSION['logued'] = false;
      echo $this->getView('user_login');
    }

    public function register() {
      echo $this->getView('user_register');
    }

}

?>
