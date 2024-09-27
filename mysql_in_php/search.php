<form action="" method="post">
    <input type="text" name="search" placeholder="enter name for search">
    <br><br>
    <button>Search</button>

</form>

<?php
include('./config.php');
if(isset($_POST['search'])){
    $search = $_POST['search'];
//   $student= $conn->prepare ("select * from college where name='$search' ");
  $student= $conn->prepare ("select * from college where name like '$search%' ");
  $student->execute();
  $result = $student->fetchAll();
//   print_r($result);
// print_r($result);

echo "<table border='1'>";
foreach($result as $students){
    echo "<tr>
    <td>". $students['name'] . "</td>
    <td>". $students['class'] . "</td>
    <td>". $students['result'] . "</td>
    
    </ tr>";


}

echo "</ table>";

}


?>