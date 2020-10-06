<?php
session_start();
require getcwd() . '/config/app.php';
require config['path']['BluePrint'];
require config['path']['Database'];
require config['path']['Migrate'];
require config['path']['DB'];
// Connect Database
require config['path']['Connect'];
require config['path']['queryFunction'];


if (isset($_SESSION['case_query']))
  echo $_SESSION['case_query'];


/*
$db = new DB;
$select = $db->table('users')->Select(['name'])->run();
foreach ($select as $d)
echo $d['name'] . '<br>'; */