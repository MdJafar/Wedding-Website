<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <b> Enter Your Otp: </b> <input type="text" name="otp" > <br>

    <input type="submit"  value="verify" name="verify" >
    </form>
</body>
</html>

<?php

session_start();
if(isset($_POST['verify']))
{
    if($_SESSION['verify']==$_POST['otp'])
    {
        echo "Verified";
    }
    else
    {
        echo " Otp Not Verified";
    }
}

?>