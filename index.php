<?php

require 'core/bootstrap.php';

//Chaining methods
$uri = "tasks";
Router::load('app/routes.php')->direct($uri);

