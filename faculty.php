<?php include("includes/header.php"); ?>

<!-- Data Section -->
<div class="container"> 
	
<!-- Faculty Page -->
	<?php 
	
	//Get Variable from Faculty Grid
	$getPageName = $_GET['pagename'];
	
	echo writeFacultyPage($getPageName);
	
	?>
<!-- End Faculty Page -->
  
</div>
<!-- End Data Section -->

<?php include("includes/footer.php"); ?>
