<?php

$user = ["name" =>"shaikh", "age" => 21,"education" => "bca"];
print_r(json_encode($user));


echo "<br>";



$json = '{"name":"John Doe","email":"johndoe@example.com","age":30}';
print_r (json_decode($json,true));


?>