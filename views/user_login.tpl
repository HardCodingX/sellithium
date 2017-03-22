{extends "layouts/login.tpl"}

{block "content"}
  <h1>Login</h1>

  <form action="login" method="post">
    <label for="user">User</label>
    <input id="user" name="user" />
    <label for="password">Password</label>
    <input id="password" name="password" type="password" />
    <input type="submit" value="Entrar" />
  </form>
{/block}
