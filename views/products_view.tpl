{extends "layouts/main.tpl"}

{block "content"}
  <div class="view">
    <h1 class="title">Products view {$product['id']}</h1>
    <p>{$product['name']}</p>
    <p>{$product['price']}</p>
    <p>{$product['stocks']}</p>

    <a class="button" href="products/{$product['id']}/cart">Carrito</a>
  </div>
{/block}
