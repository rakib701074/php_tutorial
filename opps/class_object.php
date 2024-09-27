<?php

class MathOperations{
   
    public $val=30;
    
    
    function sum($a,$b){
        return $a+$b+$this->val;
    }


    function add($c,$d){
        echo $c+$d;
    }


    function multiple($v,$g){
        return $v*$g;
    }
    
}

$names = new MathOperations();

echo $names->sum(20,b: 20);
echo "<br>";

$names->add(5,10);
echo "<br>";
echo $names->multiple(500,200);

































// class MathOperations{


    
//     function sum($a,$b){
//         // echo 10+30;
//         // return 20+40;
//         return $a+$b;
//     }
    
// }

// $names = new MathOperations();

// // sum();
// // $names->sum();
// echo $names->sum(20,77);

