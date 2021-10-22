<?php

$nums=[];
$i=0;
while(cont($nums)<6){
    $t=rand(1,38);
    if (!in_array($t,$nums)) {
        $nums[]=$t;
    }
    $i++;
}


echo "<pre>";
print_r($nums);
echo"</pre>";


?>