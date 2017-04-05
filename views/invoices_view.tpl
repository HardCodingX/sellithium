{extends "layouts/main.tpl"}

{block "content"}
  <h1>Invoices view {$id}</h1>

  <p>{$invoice['createdAt']}</p>

  <div>
    {foreach $invoice_products, key, value, name='i'}
      <p>
        {$invoice_products[$.foreach.i.index]['id']}
        {$invoice_products[$.foreach.i.index]['name']}
        {$invoice_products[$.foreach.i.index]['price']}
      </p>
    {/foreach}
  </div>
{/block}
