<?php

include "admin_header.php";
?>


<main class="ttr-wrapper">
   
   <div class="container-fluid">
       <div>
   <form action="groomsmen_insert.php" method="POST" enctype="multipart/form-data">
   <h3>Groomsmen</h3>
    
        <label>GROOMSMEN:-</label>
        <input type="text" name="groomsmen"> &nbsp  &nbsp 
        <!-- <input type="file" name="" > --> <br>
             <br>
        <label>BEST MAN:-</label>
       <input type="text" name="bestman"> &nbsp  &nbsp
       <input type="file" name="file" > <br>
             <br>
       <label>BEST FRIEND:-</label>
       <input type="text" name="bestfriend"> &nbsp  &nbsp
       <input type="file" name="file" > <br>
             <br>
       <label>ROOM MATE:-</label>
       <input type="text" name="roommate"> &nbsp  &nbsp
       <input type="file" name="file"> <br>
             <br>
       <label>COLLEGE FRIEND:-</label>
       <input type="text" name="collegefriend"> &nbsp  &nbsp
       <input type="file" name="file" > <br>
            <br>
       <label>BROTHER:-</label>
       <input type="text" name="brother"> &nbsp  &nbsp
       <input type="file" name="file" >   <br>
            <br>
       <label>FUTURE BROTHER IN LAW:-</label> &nbsp  &nbsp
       <input type="text" name="futurebrother">
       <input type="file" name="file" >  <br>
            <br>
       <input type="submit" value="Submit" name="submit">

       </form>
</div>


<?php
include("admin_footer.php");
?>