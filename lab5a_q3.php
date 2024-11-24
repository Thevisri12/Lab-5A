<?php

function calculateArea($length, $width) {
    return $length * $width;
}

$length = 12; 
$width = 13;  
$area = calculateArea($length, $width);


echo "<h3>The area of the rectangle with length $length and width $width is $area.</h3>";
?>

