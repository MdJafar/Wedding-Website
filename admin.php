<?php

include "admin_header.php";
?>
<!-- header end -->
	<!-- Left sidebar menu start -->
	
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
   
		<div class="container-fluid">
            <div>
        <form action="Category_insert.php" method="post">
            <label>Choose a Category</label>
            <select name="Category_name">
                <option value="Education">Education</option>
                <option value="Technical">Technical</option>
                <option value="News">News</option>
                <option value="Travelling">Travelling</option>
                <option value="Fitness">Fitness</option>
                <option value="Food">Food</option>
            </select><br>
            <input type="submit" value="Add" name="submit">

            </form>
</div>
			<!-- Card -->
			
<?php
include("admin_footer.php");
?>