<nav id="nav">
  <a class="nav__item" href="">Home</a>
  <a class="nav__item" href="products">Products</a>
  <a class="nav__item" href="cart">Cart</a>
  <?php
    if ($_SESSION['logued'] == false) {
  ?>
    <a class="nav__item" href="login">Login</a>
    <a class="nav__item" href="register">Register</a>
  <?php } else { ?>
    <a class="nav__item" href="invoices">Invoices</a>
    <a class="nav__item" href="logout">Logout</a>
  <?php } ?>
</nav>
