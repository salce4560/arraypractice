<?php 
$nine=[];

for($j=1;$j<=9;$j++){

    for($i=1;$i<=9;$i++){
        $nine[]="$j X $i =" . ($j*$i);
     }

}

//echo "<pre>";
//print_r($nine);
//echo "</pre>";


for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if($i%9==8){
        echo "<br>";
    }
}
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if(($i+1)%9==0){
        echo "<br>";
    }
}
