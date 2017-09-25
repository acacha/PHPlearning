<?php

require 'core/bootstrap.php';

//$request = new Request();
//$uri = $request->uri();

$uri = Request::uri();
$type = Request::type();
//dd($uri);
Router::load('app/routes.php')->direct($uri, $type);



