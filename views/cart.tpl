{extends "layouts/main.tpl"}

{block "content"}
  <h1>cart</h1>

  <div>
    {foreach $cart_products, key, value, name='k'}
      <p>
        {$cart_products[$.foreach.k.index]['id']}
        {$cart_products[$.foreach.k.index]['name']}
        {$cart_products[$.foreach.k.index]['price']}
        {$cart_products[$.foreach.k.index]['stocks']}
      </p>
    {/foreach}
    <h3>{$total}</h3>
  </div>
  <a href="checkout">Pagar</a>
  <a href="restart">Borrar Carrrito</a>
{/block}
