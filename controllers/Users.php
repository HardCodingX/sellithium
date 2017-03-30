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

      $login_result = $this->mysqli->query("select * from users where username ='".$user."' and password = '".md5($password)."'");

      $login = $login_result->fetch_assoc();

      if ($login != null && array_key_exists('id', $login)) {
        $_SESSION['logued'] = true;
        $_SESSION['id'] = $login['id'];
        header("LOCATION: /sellithium/");
      }
      echo $this->getView('user_login');
    }

    public function logout() {
      $_SESSION['logued'] = false;
      $_SESSION['id'] = 0;
      echo $this->getView('user_login');
    }

    public function register() {
      echo $this->getView('user_register');
    }

}

?>
