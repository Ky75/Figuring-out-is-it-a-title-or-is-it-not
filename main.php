<?php

//isTitle functoin starts here
function isTitle($string){
  $array = explode(" ", strtolower($string));
  $array2 = ['is', 'are', 'an', 'a', 'was', 'were', 'has', 'have', 'been', 'am'];

  for($i=0; $i<count($array); $i++){
    $array[$i] = in_array($array[$i], $array2) ? $array[$i] : ucfirst($array[$i]);
  }

  return implode(" ", $array);
}
//and ends here

//infinite loop for checking input
  while(true){
    $title = readline('$ Enter your sentence: ');
    echo isTitle($title)."\n\n";
  }
