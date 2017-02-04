<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'controllers\Controller@index');
Macaw::get('/page', 'controllers\Controller@page');
Macaw::get('/view/(:num)', 'controllers\Controller@view');

Macaw::dispatch();

?>
