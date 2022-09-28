<?php

include("Master.php");

if(isset($_POST['submit'])){
	
	$groomsmen = $_POST['groomsmen'];
	$bestman = $_POST['bestman'];

	// bestman_img start
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
	// bestman_img closed

	$bestfriend = $_POST['bestfriend'];
	// bestfriend_img start
	$file1 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file1, 'upload/' . $new_image_name);
    
     $url1 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	// bestfriend_img closed

	$roommate = $_POST['roommate'];
	// roommate_img start
	$file2 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file2, 'upload/' . $new_image_name);
    
     $url2 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	// roommate_img closed

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
     move_uploaded_file($file3, 'upload/' . $new_image_name);
    
     $url3 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	// collegefriend_img closed

	$brother = $_POST['brother'];
	// brother_img start
	$file4 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file4, 'upload/' . $new_image_name);
    
     $url4 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	// brother_img closed

	$futurebrother = $_POST['futurebrother'];
	// futurebrother_img start
	$file5 = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
     $new_image_name = rand() . '.' . $extension;
    chmod('upload', 0777);
    $allowed_extension = array("jpg", "gif", "png","pdf");
    
    if(in_array($extension, $allowed_extension))
    {
     move_uploaded_file($file5, 'upload/' . $new_image_name);
    
     $url5 = 'upload/' . $new_image_name;
	 // echo $url;
	}
	// futurebrother_img closed


	$sql="update groomsmen set groomsmen='$groomsmen',bestman='$bestman',bestman_img='$url',bestfriend='$bestfriend',bestfriend_img='$url1',roommate='$roommate',
	roommate_img='$url2',collegefriend='$collegefriend',collegefriend_img='$url3',brother='$brother',brother_img='$url4',futurebrother='$futurebrother',futurebrother_img='$url5' where id='1' ";
	
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		header("Location:groomsmen.php"); 
	}
	else
	{
    echo "Data not Inserted";
	}
}

?>