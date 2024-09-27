<?php

setcookie("shaikh","apple",time()+(86400));
setcookie("color","red",time()+(86400));
// print_r($_COOKIE);  // print for use $_cookie;

if(isset($_COOKIE['shaikh'])){
   echo "current cookie is ". $_COOKIE['shaikh'];
}else{
    echo "cookie is not set";
}

if(isset($_COOKIE['color'])){
    echo "current cookie is ". $_COOKIE['color'];
}else{
    echo " no color set";
}

echo "<br/>";
print_r($_COOKIE);  //(dushre folder jake print karege to output display karegA same he)




// $name = "rakib";
// setcookie("rakib",$name,time()+(86400));
// if(isset($_COOKIE['rakib'])){
//     print_r($_COOKIE['rakib']);
// }else{
//     echo "cookie is not found";
// }


// setcookie("shaikh","apple",time()+(86400));
// print_r($_COOKIE);
?>