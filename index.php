<?php

require 'core/bootstrap.php';

//$request = new Request();
//$uri = $request->uri();

$uri = Request::uri();
//dd($uri);
Router::load('app/routes.php')->direct($uri);



