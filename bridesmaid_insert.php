<?php

include("Master.php");

if(isset($_POST['submit'])){
	
	$bridesmaid = $_POST['bridesmaid'];
	$maidofhonor = $_POST['maidofhonor'];

	// maidofhonor_img start
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
    // maidofhonor_img close


	$bestfriend = $_POST['bestfriend'];
	// bestfriend_img" start
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
	// bestfriend_img closed


	$roommate = $_POST['roommate'];
	//roommate_img start
	$file2 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file, 'upload/' . $new_image_name);
    
     $url2 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	//  roommate_img closed


	$collegefriend = $_POST['collegefriend'];
	// collegefriend_img start
	$file3 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file, 'upload/' . $new_image_name);
    
     $url3 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	 // collegefriend_img closed
	

	$sister = $_POST['sister'];
	// sister_img start
	$file4 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file, 'upload/' . $new_image_name);
    
     $url4 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	 // sister_img closed


	$futuresister = $_POST['futuresister'];
	// futuresister_img start
	$file5 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file, 'upload/' . $new_image_name);
    
     $url5 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	//  futuresister_img closed


	$sql="update bridesmaid set bridesmaid='$bridesmaid',maidofhonor='$maidofhonor',maidofhonor_img='$url',bestfriend='$bestfriend',bestfriend_img='$url1',roommate='$roommate',
	roommate_img='$url2',collegefriend='$collegefriend',collegefriend_img='$url3',sister='$sister',sister_img='$url4',futuresister='$futuresister',futuresister_img='$url5' where id='1' ";
	
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		header("Location:bridesmaid.php"); 
	}
	else
	{
    echo "Data not Inserted";
	}
}

?>
