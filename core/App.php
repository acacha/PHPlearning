<?php

class App
{

    protected $registry = [];

    public static function bind($name,$value)
    {
        static::$registry[$name] = $value;
    }

    public static function resolve($name)
    {
        if (! array_key_exists($name,static::$registry)) throw new Exception('No object found');

        return static::$registry[$name];
    }
}

//$app = new App()
//$app->

//App::set

//App::bind('database',)
//
////App::get
//App:resolve('database')