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

    public function save_user() {
      $name = mysql_real_escape_string($_POST['name']);
      $user = mysql_real_escape_string($_POST['user']);
      $password = mysql_real_escape_string($_POST['password']);
      $repassword = mysql_real_escape_string($_POST['repassword']);

      if (strlen($name) >= 4
        && strlen($name) <= 100
        && strlen($user) >= 5
        && strlen($user) <= 50
        && strlen($password) >= 8
        && strlen($password) <= 50
        && $password == $repassword
      ) {
        $this->mysqli->query("insert into users (name, username, password) values ('".$name."', '".$user."', '".md5($password)."')");

        echo $this->getView('user_login');
      } else {
        echo $this->getView('user_register');
      }



    }

}

?>
