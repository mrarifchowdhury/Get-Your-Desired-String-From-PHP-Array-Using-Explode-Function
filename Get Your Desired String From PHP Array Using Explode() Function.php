<?php

$string = array("images/Lighthouse1334755484.jpg","images/Desert1334755484.jpg") ;

$countString = count($string);

for($i=0;$i<$countString;$i++)
{
    $stirngWithoutExtention[$i] = explode(".",$string[$i]);
    $stringBeforeDot[$i] = reset($stirngWithoutExtention[$i]);
    $stringWithoutImage[$i] = explode("images/",$stringBeforeDot[$i]);
    $stringAfterImage[$i] = end($stringWithoutImage[$i]);

}

echo $stringAfterImage[1];
    
?>