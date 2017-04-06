{extends "layouts/main.tpl"}

{block "content"}
  <h1 class="title">Home</h1>

  <div class="table">
    {foreach $productsList, key, value, name='i'}
      <p>
        <a href="products/{$productsList[$.foreach.i.index]['id']}" class="button">Ver</a>
        <a href="products/{$productsList[$.foreach.i.index]['id']}/cart" class="button">Carrito</a>
        <span>{$productsList[$.foreach.i.index]['id']}</span>
        <span>{$productsList[$.foreach.i.index]['name']}</span>
        <span>{$productsList[$.foreach.i.index]['price']}</span>
        <span>{$productsList[$.foreach.i.index]['stocks']}</span>
      </p>
    {/foreach}
  </div>
{/block}
