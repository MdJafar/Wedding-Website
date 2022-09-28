<?php

include("Master.php");

if(isset($_POST['submit'])){
	
	
	// boy_img start
	$file = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file, 'upload/' . $new_image_name);
    
     $url = 'upload/' . $new_image_name;
	 // echo $url;
	}
    // boy_img closed
    
    $sql="update boy_img set image1='$url' where id='1' ";
	
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		header("Location:boy.php"); 
	}
	else
	{
    echo "Data not Inserted";
	}
}

?>