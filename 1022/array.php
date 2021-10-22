<?php

$name=[];
$subject=['國文','英文','數學','地理','歷史'];
$name['judy']=[95,64,70,90,84];
$name['amo']=[95,64,70,90,84];
$name['john']=[95,64,70,90,84];
$name['peter']=[95,64,70,90,84];
$name['hebe']=[95,64,70,90,84];
echo"<pre>";
print_r($name);
print_r($subject);
echo"</pre>";
print_r($name['judy']);

echo"judy的數學成績".$name['judy'][2]."分";


?>