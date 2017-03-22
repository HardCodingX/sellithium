{extends "layouts/main.tpl"}

{block "content"}
  <h1>Products view {$product['id']}</h1>
  <p>{$product['name']}</p>
  <p>{$product['price']}</p>
  <p>{$product['stocks']}</p>

  <a href="products/{$product['id']}/cart">Carrito</a>
{/block}
