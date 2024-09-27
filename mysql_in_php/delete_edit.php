<?php
include('./config.php');
$students = $conn->prepare(" SELECT * FROM college");
$students->execute();
$result = $students->fetchAll();



echo "<table border=1>";
foreach($result as $student){
    echo "<tr>
    <td> " . $student['name'] . "</td> 
    <td> " . $student['class'] . "</td> 
    <td> " . $student['result'] . "</td> 
    <td> <form method='post'> <button name=delete value=". $student['id'] ."> delete</button> </form> </td>
    <td> <a href='update.php? id=". $student['id'] ." '>edit </a> </td>
    </tr>";
}

echo "</table>";


if(isset($_POST['delete'])){
  $id= $_POST['delete'];

  $students = $conn->prepare("delete from college WHERE id= '$id' ");


  if($students->execute()){
       header("Location: " . $_SERVER['PHP_SELF']);
        exit();
  }else{
    echo "record not deleted";
  }


}














?>




























