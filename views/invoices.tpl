{extends "layouts/main.tpl"}

{block "content"}
  <h1>Invoices</h1>

  <div>
    {foreach $invoicesList, key, value, name='i'}
      <p>
        <a href="invoices/{$invoicesList[$.foreach.i.index]['id']}">Ver</a>
        {$invoicesList[$.foreach.i.index]['id']}
        {$invoicesList[$.foreach.i.index]['createdAt']}
      </p>
    {/foreach}
  </div>
{/block}
