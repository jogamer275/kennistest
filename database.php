<?php

use Medoo\Medoo;


$conn = new Medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'bestellingen',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);
