<?php

include("./config.php");

//pdo method-> prepare

$getStudents = $conn->prepare("SELECT * FROM college");
$getStudents->execute();
$students=$getStudents->fetchAll();
echo "<pre>";


echo "<table border=1>";
foreach($students as $student){
    echo "<tr>
 <td> ". $student['name'] ." </td>
 <td> ". $student['class'] ." </td>
 <td> ". $student['result'] ." </td>
 </tr>";
}
echo "</table>";
?>