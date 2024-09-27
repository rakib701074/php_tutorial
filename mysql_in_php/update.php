<?php

include ('./config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudents = $conn->prepare(" select * from college where id='$id' ");

    $getStudents->execute();
    $student = $getStudents->fetchAll();
    $name = $student[0]['name'];
    $class = $student[0]['class'];
    $result = $student[0]['result'];
}
?>

<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name="name" />
    <br><br>
    <input type="text" value="<?php echo $class ?>" name="class" />
    <br><br>
    <input type="text" value="<?php echo $result ?>" name="result" />
    <br><br>

    <button value="<?php echo $id; ?>" name="update"> Update student data</button>

</form>



<?php
if (isset($_POST['update'])) {
   $id =  $_POST['update'];
   $name =  $_POST['name'];

   $class =  $_POST['class'];
  
   $result =  $_POST['result'];
   
    $updateStudents = $conn->prepare("update college set 
     name='$name',
     class ='$class',
     result = '$result'
      where id='$id'");

      if($updateStudents->execute()){
        header('location:delete_edit.php');
      }else{ 
        echo "update failed";
      }

    //  echo "update college set 
    //  name='$name',
    //  class='$class',
    //  result='$result' " ;
    // echo $updateStudents->execute();
}












// //static
// $updateStudents = $conn->prepare("update college set name='shaikh' where id='11'  ");
// echo $updateStudents->execute();
?>