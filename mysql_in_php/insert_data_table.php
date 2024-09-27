<?php
if(isset($_POST['name'])){
  $name = $_POST['name'];
  $class = $_POST['class'];
  $result = $_POST['result'];

include('./config.php');

$query = $conn->prepare("INSERT INTO college(id,name,class,result)
VALUES
(NULL,'$name','$class',$result)
");
$result = $query->execute();
if($result){
    echo "data inserted";
}else{
    echo "data not inserted";
}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="enter ur name" name="name" /><br><br>
        <input type="text" placeholder="enter ur class" name="class" /><br><br>
        <input type="number" placeholder="enter ur result" name="result" /><br><br>

        <button>insert data</button>
    </form>
    
</body>
</html>

















<!-- 

include('./config.php');

$query = $conn->prepare("INSERT INTO college(id,name,class,result)
VALUES
(4,'rafik','12th',36),
(5,'shakib','11th',40),
(6,'hussain','10th',60),
(7,'azmat','9th',90)
");
$result = $query->execute();
if($result){
    echo "data inserted";
}else{
    echo "data not inserted";
} -->