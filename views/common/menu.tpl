<nav>
  <a href="">Home</a>
  <a href="products">Products</a>
  <a href="cart">Cart</a>
  <a href="invoices">Invoices</a>
  <?php
    if ($_SESSION['logued'] == false) {
  ?>
    <a href="login">Login</a>
    <a href="register">Register</a>
  <?php } else { ?>
    <a href="logout">Logout</a>
  <?php } ?>
</nav>
