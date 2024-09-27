<?php

//super global and global difference
/* super global predefined in php
// global variabe user defined variable uski ko hi display krta hi'*/


// $a ="10";

// // const data="20";
// $data="20";
// echo "<pre>";
// print_r($GLOBALS);


//................>
//2. server
// $a ="10";

// // const data="20";
// $data="20";
// echo "<pre>";
// print_r($_SERVER['HTTP_HOST']);    //server ki information show hoti hi




// Request post or get both are support
// $a ="10";

// // const data="20";
// $data="20";
// echo "<pre>";
// print_r($_REQUEST);    


//get
// $a ="10";

// // const data="20";
// $data="20";
// echo "<pre>";
// print_r($_REQUEST);  



//post
// $a ="10";

// // const data="20";
// $data="20";
// echo "<pre>";
// print_r($_POST);  


//files 
$a ="10";

// const data="20";
//files 
$data="20";
echo "<pre>";
print_r($_FILES);  


//cookies browser ke andr data save kr skte hi


//session
// ek page uper data tha use save kr use multiple pages use kr dekh skte hi( check kr hi user login hi ki nhi hi)
//session andr data maintain rehta hi

//$_env (enverment) jo inverment use kr uske bare puri information deta hi

?>