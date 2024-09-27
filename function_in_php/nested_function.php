<?php
// function condition call krna ish ke lie nested function use krte hi (or her call na ho raha ho)
// nested function tabi chalega jab parent function pehle call ho chuka hoga
function test(){
    echo "hello";
    function apple(){
        echo "apple";
    }

    apple();
}

test();
echo "<br>";
// apple();



?>