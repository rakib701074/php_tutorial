<?php
function test(){
    echo "test fucntion call";
}
// $name = test();
$test = "test";   //-> function ko variable store krba dia 
// echo $test();


function main($a){
    $a();
}

main($test);



?>