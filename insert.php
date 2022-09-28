<?php
include ("Master.php");

if(isset($_POST["submit"]))
{
     $name=$_POST["name"];
     $email=$_POST["email"];
     $number=$_POST["number"];
     $message=$_POST["message"];

     
        $sql= "INSERT INTO contact(name,email,number,message) VALUES ('$name','$email','$number','$message')";
    
        $data = mysqli_query($conn,$sql);
            if($data)
                {
                   echo"data inserted into database";
                }
        
              else
               {
         echo "All field are Required";
               }
    
    
} 



?>