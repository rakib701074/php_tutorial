<?php
if(isset($_POST['filename'])){
$fileName =" file " . $_POST['filename'];
    // $fileName = "./file/dummy.txt";
// $content = "this is dummy file";

$content = $_POST['content'];
$file= fopen($fileName,"w") or die("unable to create file");
fwrite($file,$content);
fclose($file);
echo "file created ";

}





?>


<form action="" method="post">
    <input type="text" placeholder="enter file name" name="filename"/>
    <br><br>
    <textarea name="content">

    </textarea>
<br><br>
    <button>create file</button>
</form>