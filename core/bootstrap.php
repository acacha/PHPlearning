<?php

use Acachaframework\App;
use Acachaframework\Database\Connection;
use Acachaframework\Database\QueryBuilder;

$config = require 'config/config.php';

require 'core/lib/functions.php';
require 'vendor/autoload.php';

$pdo = Connection::connect($config);
App::bind('database',new QueryBuilder($pdo) );
