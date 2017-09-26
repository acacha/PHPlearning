<?php

$config = require 'config/config.php';

require 'core/lib/functions.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Request.php';

require 'core/Router.php';
require 'core/App.php';

$pdo = Connection::connect($config);
App::bind('database',new QueryBuilder($pdo) );
