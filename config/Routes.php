<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'controllers\Home@index');
Macaw::get('/page', 'controllers\Home@page');
Macaw::get('/view/(:num)', 'controllers\Home@view');

Macaw::dispatch();

?>
