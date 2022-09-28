<?php

include "admin_header.php";
?>


<main class="ttr-wrapper">
   
   <div class="container-fluid">
       <div>
   <form action="boygirl_insert.php" method="POST"  enctype="multipart/form-data">
   <h3>Boy&Girl</h3>
        
        <label>Boy Name H2:-</label>
       <input type="text" name="boy_h2"> &nbsp  &nbsp
        <input type="file" name="file" >    <br>   
       
                <br>
       <label>Boy Name:-</label>
       <input type="text" name="boy"><br>
                <br>
       <label>Girl Name H2:-</label>
       <input type="text" name="girl_h2">&nbsp  &nbsp
       <input type="file" name="file1" > <br>
                <br>
       <label>Girl Name:-</label>
       <input type="text" name="girl"><br>
                <br>
       <label>Our Story:-</label>
       <input type="text" name="ourstory"><br>
                <br>
       <label>Where & Where:-</label>
       <input type="text" name="where_where"><br>
                <br>
       <input type="submit" value="Submit" name="submit">

       </form>
</div>


<?php
include("admin_footer.php");
?>