<?php

$string = readline('$ Enter a sentence brother: ');


$array = array(" is ", " are ", " an ", " a ", " was ", " were ", " has ", " have ", " been ", " am ");
$array2 = array(" Is ", " Are ", " An ", " A ", " Was ", " Were ", " Has ", " Have ", " Been ", " Am ");

$string = str_replace($array2, $array, ucwords(strtolower($string))." ");
$string = substr($string, 0, strlen($string) - 1);


echo $string."\n\n\n";