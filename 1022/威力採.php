<?php

$nums=[];
for ($i=0; $i<6 ; $i++) { 
    $t=rand(1,38);
    if(!in_array($t,$nums)) {
        $nums[]=$t;        
    }
}


echo "<pre>";
print_r($nums);
echo"</pre>";


?>