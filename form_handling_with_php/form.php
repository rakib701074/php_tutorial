<?php

// print_r($_POST);
if(isset($_POST['name'])){
    echo "user name is ". $_POST['name'];
    echo "<br>";
    echo "user email is " . $_POST['email'];
    echo "<br>";
    echo "user password is " . $_POST['password'];
    echo "<br>";
    echo "user skill " . implode( $_POST['skills']);
    echo "<br>";
    echo "user gender is " . $_POST['male'];
    echo "<br>";
    echo "user city is " . $_POST['city'];
    echo "<br>";
    echo "user bio is " . $_POST['bio'];

}
?>