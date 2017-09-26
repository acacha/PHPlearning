<?php

require 'core/bootstrap.php';

$uri = Request::uri();
$type = Request::type();

Router::load('app/routes.php')->direct($uri, $type);

//$tasks = $query->fetchAll('tasks');
//
//require 'app/views/tasks.view.php';


