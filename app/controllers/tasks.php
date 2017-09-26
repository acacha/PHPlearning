<?php

//BOOTSTRAP
$pdo = Connection::connect($config);

App::bind('database', new QueryBuilder($pdo));


//FORA BOOSTRAP

$query = App::resolve('database');

$tasks = $query->fetchAll('tasks');

require 'app/views/tasks.view.php';