<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'database' => 'website',
    'charset' => 'utf8',
    'collation' => 'utf8_unicide_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();