<?php

$conn = mysqli_connect('localhost','root','','wedding');
if($conn)
{
    // echo "connection ok";
}

if(mysqli_connect_error()){
    $message="My sql error :".mysqli_connect_error();
    die("Could not connect to the database");
}

else
{
    
}
?>