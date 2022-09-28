<?php

include "admin_header.php";
?>


<main class="ttr-wrapper">
   
   <div class="container-fluid">
       <div>
   <form action="boy_img.php" method="POST" enctype="multipart/form-data">
   <h3>Boy Image</h3>
    
        <label>image1:-</label> &nbsp  &nbsp
        
       <input type="file" name="file" >  <br>
            <br>
       <input type="submit" value="Submit" name="submit">

       </form>
</div>


<?php
include("admin_footer.php");
?>