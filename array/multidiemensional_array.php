<?php
$users = [
    ["name"=>"shaikh", "age" => 21, "city" => "noida"],
    ["name"=>"arman", "age" => 21, "city" => "delhi"],
    ["name"=>"abde", "age" => 34, "city" => "panjab"],
];
//  echo "<pre>";
//  print_r($users);

echo "<table border=1>";
foreach($users as $user){
    echo "<tr>";
   foreach($user as $key => $item){
    echo "<td>";
    echo "$key is $item";
    echo "<br/>";
    echo "</td>";
   }
   echo "</tr>";

   echo "<br/>"; echo "<br/>";
}
echo "</table>";

?>