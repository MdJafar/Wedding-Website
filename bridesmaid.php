<?php

include "admin_header.php";
?>


<main class="ttr-wrapper">
   
   <div class="container-fluid">
       <div>
   <form action="bridesmaid_insert.php" method="POST" enctype="multipart/form-data">
   <h3>BRIDESMAID</h3>
       <label>BRIDESMAID:-</label>
       <input type="text" name="bridesmaid"> &nbsp  &nbsp
       <!-- <input type="file" name="bridesmaid_img" >  --> <br>
                <br>
       <label>MAID OF HONOR:-</label>
       <input type="text" name="maidofhonor"> &nbsp  &nbsp
       <input type="file" name="file" > <br>
                <br>
       <label>BEST FRIEND:-</label>
       <input type="text" name="bestfriend"> &nbsp  &nbsp
       <input type="file" name="file1" > <br>
                <br>

       <label>ROOM MATE:-</label> 
       <input type="text" name="roommate"> &nbsp  &nbsp
       <input type="file" name="file2" > <br>
                <br>

       <label>COLLEGE FRIEND:-</label>
       <input type="text" name="collegefriend"> &nbsp  &nbsp
       <input type="file" name="file3" > <br>
                <br>

       <label>SISTER:-</label>
       <input type="text" name="sister"> &nbsp  &nbsp
       <input type="file" name="file4" > <br>
                <br>

       <label>FUTURE SISTER IN LAW:-</label>
       <input type="text" name="futuresister"> &nbsp  &nbsp
       <input type="file" name="file5" > <br>
                <br>
       <input type="submit" value="Submit" name="submit">

       </form>
</div>


<?php
include("admin_footer.php");
?>