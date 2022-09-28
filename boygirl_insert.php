<?php

include("Master.php");

if(isset($_POST['submit'])){
	
	$boy_h2 = $_POST['boy_h2'];

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


	$boy = $_POST['boy'];
	$girl_h2 = $_POST['girl_h2'];

	// girl_img start
	$file1 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file, 'upload/' . $new_image_name);
    
     $url1 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	// girl_img closed

	$girl = $_POST['girl'];
	$ourstory = $_POST['ourstory'];
	$where_where = $_POST['where_where'];


	$sql="update boygirl set boy_h2='$boy_h2',boy_img='$url',boy='$boy',girl_h2='$girl_h2',girl_img='$url1',girl='$girl',
	ourstory='$ourstory',where_where='$where_where' where id='1' ";

    // $sql = "INSERT INTO boygirl (boy_h2,boy,girl_h2,girl,ourstory) VALUES ('$boy_h2','$boy','$girl_h2','$girl','$ourstory')";
	
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		header("Location:boygirl.php"); 
	}
	else
	{
    echo "Data not Inserted";
	}
}

?>