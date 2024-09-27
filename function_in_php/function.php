<?php
//function ke andr function ko call kr skte hi nhi kr skte hi
//ans-> kr skte hi function ke andr function ko call
//ek function ek dushre directly call nhi kr skte infinate loop chal jayega(conditionally call kr skte hi)


// function test(){
//     echo "user name is shaikh";
//     echo "<br>";
//     echo "user age is 22";
//     echo "<br>";
//     echo "user email id is shaikh@gmail.com";
//     echo "<hr/>";
// }

// test();

// test();
function demo(){
    echo "<h2>User Deatiles</h2>";
}
function test(){

    demo();
    echo "user name is shaikh";
    echo "<br>";
    echo "user age is 22";
    echo "<br>";
    echo "user email id is shaikh@gmail.com";
    echo "<hr/>";
}

// test();


?>
