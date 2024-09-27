<?php

include('./config.php');

$getStudents = $conn->prepare("SELECT id,name FROM college");
$getStudents->execute();
$studentData= $getStudents->fetchAll();
// print_r($studentData);

echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $studentsData){
     echo "<option value=".$studentsData['id']." >".$studentsData['name']."</option>";
}



echo "</select>";

?>