<?php

use Acachaframework\Request;
use Acachaframework\Router;

require 'core/bootstrap.php';

Router::load('app/routes.php')->direct(Request::uri(), Request::type());
