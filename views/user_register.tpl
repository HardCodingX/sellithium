{extends "layouts/main.tpl"}

{block "content"}
  <h1>Register</h1>

  <form action="register" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" />

    <label for="user">Username</label>
    <input type="text" id="user" name="user" />

    <label for="password">Password</label>
    <input type="password" id="password" name="password" />

    <label for="repassword">Repeat Password</label>
    <input type="password" id="repassword" name="repassword" />

    <input type="submit" value="Register" />
  </form>
{/block}
