{extends "layouts/main.tpl"}

{block "content"}
  <h1>cart</h1>

  <div>
    {foreach $cart_products, key, value, name='k'}
      <p>
        {$cart_products[$.foreach.k.index]['id']}
        {$cart_products[$.foreach.k.index]['name']}
        {$cart_products[$.foreach.k.index]['price']}
        <span>1</span>
      </p>
    {/foreach}
    {if $total == 0}
      <p>No hay productos en su carrito</p>
    {else}
      <h3>{$total}</h3>

      <a href="checkout">Pagar</a>
      <a href="restart">Borrar Carrito</a>
    {/if}
    <a href="products">Regresar</a>
  </div>
{/block}
