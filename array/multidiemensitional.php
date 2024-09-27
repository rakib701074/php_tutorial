<?php
// $n = [
//     "user" => "shaikh",
//     "users" =>[
//         "name" => "rakib",
//         "age" => 21,
//         "education" => "garducation"
//     ]
//     ];

// //     echo "<pre>";
// // print_r($n['users']);

// foreach($n as $ns){
//     print_r($ns);
// }



//nested for loop
$users = [
    [1,"anil","noida","vfvf"],
    [2,"akil","skff","vfvf"],
    [3,"dkjd","delhi","vfvf"],
    [4,"shakir","ah","vfvf"],

];
for($i=0; $i< count($users); $i++){
    for($j=0; $j< count($users[$i]); $j++){
        echo $users[$i][$j]. "<br>";
    }
}

?>