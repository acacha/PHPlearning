<?php

require 'core/bootstrap.php';

//Chaining methods
$uri = "tasks";

dd(trim('/about/','/'));

dd($_SERVER);



Router::load('app/routes.php')->direct($uri);

