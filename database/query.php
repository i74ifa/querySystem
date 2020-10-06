<?php
require_once config['path']['Migrate'];

require_once config['path']['Connect'];

/**
 *
 * - add this if you want create the table from the database\migrate
 * - and disable like this comment or delete the code ;
 * 
 */
function Query($name_table, $array)
{
  require config['path']['Connect'];
  $sql = (isset($sql) ? $sql . "CRETE TABLE $name_table (" : "CREATE TABLE $name_table (");
  for ($i = 0; $i < count($array); $i++) {
    if ($i == 0)
      $sql = $sql;
    else if ($i == 1)
      $sql = $sql . $array[$i];
    else
      $sql = $sql .  ',' . $array[$i];
  }
  $sql = $sql . ')';
  echo $sql . '<br>';

  try {
    $con->query($sql);
    $_SESSION['case_query'] = null;
    $_SESSION['case_query'] =  "The $name_table Created";
  } catch (Exception $e) {
    $_SESSION['case_query'] = null;
    $_SESSION['case_query'] = $e->getMessage();
  }
}
// Drop Table you want add $con->query();;

//  - Call function Like >> >> Query($migrate->name_function()[0], $migrate->users()) << << ; 
//Query($migrate->users()[0], $migrate->users());
//Query($migrate->posts()[0], $migrate->posts());