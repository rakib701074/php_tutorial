<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "collage";

$connection = new mysqli($host,$username,$pass,$db);

if(!$connection){
    die ("connection is failed " . mysqli_connect_error());
}
    echo "connection is sucessful";

    echo "<br>";
    $result=$connection->query("show tables")->fetch_all();
    print_r($result);







?>