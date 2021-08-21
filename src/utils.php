<?php

function dateToInt(string $dateString):mixed {
  $time = strtotime($dateString);
  $newformat = date('Y-m-d',$time);
  return $newformat;
}

