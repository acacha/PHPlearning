<?php

$database = App::resolve('database');

$database->insert('tasks', [
    "name" => $_POST['name']
]);

require 'app/views/successfull.view.php';