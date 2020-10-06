<?php

/**
 * Config /
 * 
 * @return config your app
 
 */ 
 
// if your index in folder like public/index.php add getcwd() . '/' . '../' under this line
$root = getcwd() . '/';
define(
  'config',
  [
    'app' => [
      'name' => 'Rodir',
      'time' => 'UTC+3',
      'numfloat' => '0',
      'country' => null
    ],
    // Paths files

    'path' => [
      'queryFunction' => $root . 'database/query.php',
      'BluePrint'     => $root . 'database/BluePrint.php',
      'Database'      => $root . 'database/Database.php',
      'Migrate'       => $root . 'database/Migrate.php',
      'DB'            => $root . 'database/DB.php',
      'Connect'       => $root . 'database/connect.php',
      'methods'       => $root . 'config/methods.php',
    ]
  ]
  );