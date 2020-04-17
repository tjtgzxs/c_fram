<?php
require_once ('vendor/autoload.php');
use  NoahBuscher\Macaw\Macaw;
Macaw::get('/','controllers\Test@index');
Macaw::get('/hello','controllers\Hello@hello');

Macaw::dispatch();