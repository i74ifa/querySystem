<?php


function CommaArray($array)
{
  if (!is_array($array))
    return 'This Not Array';
  $valuesComma = [];
  foreach ($array as $ar) {
    if (!is_integer($ar) && !strpos($ar, '()'))
      array_push($valuesComma, "'$ar'");
    else
      array_push($valuesComma, $ar);
  }
  return $valuesComma;
}