<?php

//return [
//    '' => 'app/controllers/home.php',
//    'index.php' => 'app/controllers/home.php',
//
//    'contact' => 'app/controllers/contact.php',
//
//    'about' => 'app/controllers/about.php',
//    'news' => 'app/controllers/news.php',
//    'tasks' => 'app/controllers/tasks.php',
//
//    //GET
//    'task' => 'app/controllers/addTask.php',
//    //POST
//    'task' => 'app/controllers/addTask1.php',
//];

//$router->

//Route::define('task','GET','app/controllers/addTask1.php');
//Route::get('task','app/controllers/addTask1.php');
//Route::post('task','app/controllers/addTask1.php');
$router = new Router();

$router->get('','app/controllers/home.php');
$router->get('index.php','app/controllers/home.php');
$router->get('contact','app/controllers/contact.php');
$router->get('about','app/controllers/about.php');
$router->get('news','app/controllers/news.php');
$router->get('tasks','app/controllers/tasks.php');
$router->get('task','app/controllers/addTask.php');
$router->post('task','app/controllers/addTask1.php');