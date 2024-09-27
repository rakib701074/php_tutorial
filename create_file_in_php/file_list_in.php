<?php
//1.//directry scan krne ke lie use -> scandir function use krte hi

//2.//question -> apke pass do array hi ush mein jo do same element hi use remove krna hi kaise kroge ---> array_diff(2parameter)
$path = "file";
$items =scandir($path);
// print_r($items);
$items = array_diff($items,array(".",".."));
// print_r($items);
foreach($items as $item){
    echo "<a href=./file/$item> $item</a>";
    echo "<br>";
}





?>