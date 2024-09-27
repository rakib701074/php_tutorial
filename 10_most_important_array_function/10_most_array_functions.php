<?php
//1, ek variable array hi yah nhi -> use (is_array) function
// $user = ["shaikh","rali","rakib","usman"];
 
// if(is_array($user)){
//     print_r(is_array($user));
// }else{
//     echo "its nor a array";
// }

//2 string check for (is_string) function
// $user ="shaikh";

// if(is_array($user)){
//     echo is_array($user);
// }else{
//     echo "its not a array";
// }


//3. ek array ke andr kitne elements hi  ( count function use krke count kr skte hi array ke andr kitne elements hi)
// $user = ["shaikh","rali","rakib","usman"];

// echo count($user);

//4. ek array andr se elements first,secound third yah koi bi  nikal na hi to kaise nikaloge
// $user = ["shaikh","rali","rakib","usman"];
//  unset($user[2]);
// print_r($user);


//5.  last me ek element add kaise kroge
// $user = ["shaikh","rakib","soel"];
// array_push($user,"anil");
// print_r($user);

// 6. agar apko last element nikal(delete krna ho) na hi or pop krna hi to kaise kroge
//   $user = ["shaikh","sidhu","anil","sunil"];
//   array_pop($user);
//   print_r($user);

  //7,array key nikal ni hi to kaise nikaloge
  //function array_keys

//   $user = ["name" => "shaikh", "age" =>21, "education" => "bca"];
//   print_r(array_keys($user));

//8 . array hi usko string mein convert kaise keroge 
//  $user = ["shaikh","anil","santosh","ssourav"];
//  print_r(implode($user));

//9 string array convert krna hi to kaise kroge 
//  $name = "shaikh";
//  $name = explode(" ",$name);
// print_r($name);

//10. jaha jaha o hi use hi ye convert hona chaheye array mein
// o break hojayega hat jayega jaha jaha hoga
// $name = "shaikh dsbvsddsvh nddssdnbs";
//  $name = explode(",",$name);
// //  $name = explode("k",$name);
// print_r($name);

//11. do array hi use merge krna chahate ho ek array ke andr
// $user = ["shaikh","rakib"];
// $name = ["anil","fjfh"];
// print_r(array_merge($user,$name));

//12. ek array hi us mein kuch duplicate elements hi duplicate elements remove kaise karege (array_unique($user) function)
//array_unique function ke through remove ho jayega duplicate data

// $user = ["shaikh","rakib","rakib","sohel"];
// $name = ["anil","shaikh"];
// print_r(array_unique($user));

 

?>