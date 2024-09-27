<?php

// // unlimited parameter use a function
// function sum($a,$b){
//     echo $a+$b;
// }

// sum(30,50);    //dynamic output


function userdata($name,$color){
    echo "<h1 style='color: $color';>$name</h1>";
}

userdata('shaikh','green');
userdata('shakir','red');
userdata('hussain','yellow');
userdata('rakib','black');
?>