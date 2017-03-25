<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'controllers\Home@index');
Macaw::get('/products', 'controllers\Products@index');
Macaw::get('/products/(:num)', 'controllers\Products@view');
// Macaw::get('/products/(:num)/edit', 'controllers\Products@edit');
Macaw::get('/products/(:num)/cart', 'controllers\Products@cart');
Macaw::get('/cart', 'controllers\Cart@index');
Macaw::get('/checkout', 'controllers\Cart@checkout');
Macaw::get('/restart', 'controllers\Cart@restart');
Macaw::get('/invoices', 'controllers\Invoices@index');
Macaw::get('/invoices/(:num)', 'controllers\Invoices@view');
Macaw::get('/account', 'controllers\Users@index');
Macaw::get('/login', 'controllers\Users@login');
Macaw::post('/login', 'controllers\Users@try_login');
Macaw::get('/logout', 'controllers\Users@Logout');
Macaw::get('/register', 'controllers\Users@register');

Macaw::get('/test/(:num)', 'controllers\Home@test');

Macaw::dispatch();

?>
