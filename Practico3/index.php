<?php
$str = "Este es un mensaje de error. Si ves otro error, por favor reporta el error.";

echo str_replace('error' , 'exito', $str) ; echo("<br>");
// ejercicio 1 
echo("<br>");

echo substr( $str, 10, 20 );    echo("<br>");   //ejercicio2

echo("<br>");

echo strlen($str);     echo("<br>");     //ejercicio3

echo("<br>");

echo str_word_count($str);     echo("<br>");   //ejercicio4

echo("<br>");

echo strtoupper($str);      echo("<br>");   //ejercicio5

echo("<br>");

$array = explode(" ", $str);

print_r($array);

?>