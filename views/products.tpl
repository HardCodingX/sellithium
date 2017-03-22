{extends "layouts/main.tpl"}

{block "content"}
  <h1>Products</h1>

  <div>
    {foreach $productsList, key, value, name='i'}
      <p>
        <a href="products/{$productsList[$.foreach.i.index]['id']}">Ver</a>
        <a href="products/{$productsList[$.foreach.i.index]['id']}/edit">Editar</a>
        <a href="products/{$productsList[$.foreach.i.index]['id']}/cart">Carrito</a>
        {$productsList[$.foreach.i.index]['id']}
        {$productsList[$.foreach.i.index]['name']}
        {$productsList[$.foreach.i.index]['price']}
        {$productsList[$.foreach.i.index]['stocks']}
      </p>
    {/foreach}
  </div>
{/block}
