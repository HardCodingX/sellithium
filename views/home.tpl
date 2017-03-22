{extends "layouts/main.tpl"}

{block "content"}
  <h1>Home</h1>

  <div>
    {foreach $products, key, value, name='i'}
      <p>
        <a href="products/{$products[$.foreach.i.index]['id']}">Ver</a>
        <a href="products/{$products[$.foreach.i.index]['id']}/edit">Editar</a>
        <a href="products/{$products[$.foreach.i.index]['id']}/cart">Carrito</a>
        {$products[$.foreach.i.index]['id']}
        {$products[$.foreach.i.index]['name']}
        {$products[$.foreach.i.index]['price']}
        {$products[$.foreach.i.index]['stocks']}
      </p>
    {/foreach}
  </div>
{/block}
