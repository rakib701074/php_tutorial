<?php

// print_r($_FILES);

if($_FILES['file2']){
    // print_r($_FILES['fileUpload']);
   $path = $_FILES['file2']['name'];
//    echo $path;
$Upload_path ="./uploads".$path;
// echo $Upload_path;
move_uploaded_file($_FILES['file2']['tmp_name'], $Upload_path) || die("failed to upload");
}else{
    die("no file found");
}

?>


//\xampp\htdocs\php_tutorial\global variable\Files\

chmod -R 0777 /Applications/XAMPP/xamppfiles/htdocs/php_tutorial/global_variables/Files/uploads
chmod -R 0777 /Applications/XAMPP/xamppfiles/htdocs/php_tutorial/global_variables/Files/uploads xampp\htdocs\php_tutorial\global_variables\Files\uploads
